import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Member } from '../../database/entities/member.entity';
import { Assembly } from '../../database/entities/assembly.entity';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';

@Injectable()
export class StatisticsService {
  constructor(
    @InjectRepository(Member)
    private readonly membersRepository: Repository<Member>,
    @InjectRepository(Assembly)
    private readonly assembliesRepository: Repository<Assembly>,
    @InjectRepository(District)
    private readonly districtsRepository: Repository<District>,
    @InjectRepository(Region)
    private readonly regionsRepository: Repository<Region>,
  ) {}

  async globalOverview() {
    const [members, assemblies, districts, regions] = await Promise.all([
      this.membersRepository.count(),
      this.assembliesRepository.count(),
      this.districtsRepository.count(),
      this.regionsRepository.count(),
    ]);
    const genders = await this.membersRepository
      .createQueryBuilder('member')
      .select('member.gender', 'gender')
      .addSelect('COUNT(member.id)', 'count')
      .groupBy('member.gender')
      .getRawMany();
    const ageGroups = await this.membersRepository.query(`
      SELECT
        CASE
          WHEN age < 18 THEN '0-17'
          WHEN age BETWEEN 18 AND 35 THEN '18-35'
          WHEN age BETWEEN 36 AND 59 THEN '36-59'
          ELSE '60+'
        END AS bucket,
        COUNT(*)
      FROM members
      GROUP BY bucket
    `);
    return {
      totals: { members, assemblies, districts, regions },
      genders,
      ageGroups,
    };
  }

  async regionBreakdown(regionId: string) {
    const members = await this.membersRepository.count({ where: { region: { id: regionId } } });
    const assemblies = await this.assembliesRepository.count({ where: { region: { id: regionId } } });
    const districts = await this.districtsRepository.count({ where: { region: { id: regionId } } });
    return { members, assemblies, districts };
  }
}
