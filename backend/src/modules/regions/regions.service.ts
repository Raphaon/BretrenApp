import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Region } from '../../database/entities/region.entity';
import { CreateRegionDto } from './dto/create-region.dto';
import { UpdateRegionDto } from './dto/update-region.dto';

@Injectable()
export class RegionsService {
  constructor(
    @InjectRepository(Region)
    private readonly regionsRepository: Repository<Region>,
  ) {}

  create(payload: CreateRegionDto) {
    const region = this.regionsRepository.create(payload);
    return this.regionsRepository.save(region);
  }

  findAll() {
    return this.regionsRepository.find({ relations: ['districts', 'assemblies'] });
  }

  async findOne(id: string) {
    const region = await this.regionsRepository.findOne({
      where: { id },
      relations: ['districts', 'assemblies'],
    });
    if (!region) {
      throw new NotFoundException('Region not found');
    }
    return region;
  }

  async update(id: string, payload: UpdateRegionDto) {
    const region = await this.findOne(id);
    Object.assign(region, payload);
    return this.regionsRepository.save(region);
  }

  async remove(id: string) {
    const region = await this.findOne(id);
    await this.regionsRepository.remove(region);
    return { deleted: true };
  }
}
