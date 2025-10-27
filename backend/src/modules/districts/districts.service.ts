import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { District } from '../../database/entities/district.entity';
import { CreateDistrictDto } from './dto/create-district.dto';
import { UpdateDistrictDto } from './dto/update-district.dto';
import { Region } from '../../database/entities/region.entity';

@Injectable()
export class DistrictsService {
  constructor(
    @InjectRepository(District)
    private readonly districtsRepository: Repository<District>,
    @InjectRepository(Region)
    private readonly regionsRepository: Repository<Region>,
  ) {}

  async create(payload: CreateDistrictDto) {
    const region = await this.regionsRepository.findOneBy({ id: payload.regionId });
    if (!region) {
      throw new NotFoundException('Region not found');
    }
    const district = this.districtsRepository.create({
      ...payload,
      region,
    });
    return this.districtsRepository.save(district);
  }

  findAll() {
    return this.districtsRepository.find({ relations: ['region', 'assemblies'] });
  }

  async findOne(id: string) {
    const district = await this.districtsRepository.findOne({
      where: { id },
      relations: ['region', 'assemblies'],
    });
    if (!district) {
      throw new NotFoundException('District not found');
    }
    return district;
  }

  async update(id: string, payload: UpdateDistrictDto) {
    const district = await this.findOne(id);
    if (payload.regionId) {
      const region = await this.regionsRepository.findOneBy({ id: payload.regionId });
      if (!region) {
        throw new NotFoundException('Region not found');
      }
      district.region = region;
    }
    Object.assign(district, payload);
    return this.districtsRepository.save(district);
  }

  async remove(id: string) {
    const district = await this.findOne(id);
    await this.districtsRepository.remove(district);
    return { deleted: true };
  }
}
