import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Assembly } from '../../database/entities/assembly.entity';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';
import { CreateAssemblyDto } from './dto/create-assembly.dto';
import { UpdateAssemblyDto } from './dto/update-assembly.dto';

@Injectable()
export class AssembliesService {
  constructor(
    @InjectRepository(Assembly)
    private readonly assembliesRepository: Repository<Assembly>,
    @InjectRepository(District)
    private readonly districtsRepository: Repository<District>,
    @InjectRepository(Region)
    private readonly regionsRepository: Repository<Region>,
  ) {}

  async create(payload: CreateAssemblyDto) {
    const district = await this.districtsRepository.findOneBy({ id: payload.districtId });
    if (!district) {
      throw new NotFoundException('District not found');
    }
    const region = await this.regionsRepository.findOneBy({ id: payload.regionId });
    if (!region) {
      throw new NotFoundException('Region not found');
    }
    const assembly = this.assembliesRepository.create({
      ...payload,
      district,
      region,
    });
    return this.assembliesRepository.save(assembly);
  }

  findAll() {
    return this.assembliesRepository.find({ relations: ['district', 'region', 'members'] });
  }

  async findOne(id: string) {
    const assembly = await this.assembliesRepository.findOne({
      where: { id },
      relations: ['district', 'region', 'members'],
    });
    if (!assembly) {
      throw new NotFoundException('Assembly not found');
    }
    return assembly;
  }

  async update(id: string, payload: UpdateAssemblyDto) {
    const assembly = await this.findOne(id);
    if (payload.districtId) {
      const district = await this.districtsRepository.findOneBy({ id: payload.districtId });
      if (!district) {
        throw new NotFoundException('District not found');
      }
      assembly.district = district;
    }
    if (payload.regionId) {
      const region = await this.regionsRepository.findOneBy({ id: payload.regionId });
      if (!region) {
        throw new NotFoundException('Region not found');
      }
      assembly.region = region;
    }
    Object.assign(assembly, payload);
    return this.assembliesRepository.save(assembly);
  }

  async remove(id: string) {
    const assembly = await this.findOne(id);
    await this.assembliesRepository.remove(assembly);
    return { deleted: true };
  }
}
