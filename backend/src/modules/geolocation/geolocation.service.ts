import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Assembly } from '../../database/entities/assembly.entity';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';

@Injectable()
export class GeolocationService {
  constructor(
    @InjectRepository(Assembly)
    private readonly assembliesRepository: Repository<Assembly>,
    @InjectRepository(District)
    private readonly districtsRepository: Repository<District>,
    @InjectRepository(Region)
    private readonly regionsRepository: Repository<Region>,
  ) {}

  async mapData() {
    const [assemblies, districts, regions] = await Promise.all([
      this.assembliesRepository.find(),
      this.districtsRepository.find(),
      this.regionsRepository.find(),
    ]);
    return { assemblies, districts, regions };
  }

  async deadZones() {
    const assemblies = await this.assembliesRepository.find({ select: ['location'] });
    const coverage = assemblies.filter((item) => item.location);
    return { coverage }; // placeholder detection logic
  }
}
