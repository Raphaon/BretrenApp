import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Member } from '../../database/entities/member.entity';
import { Assembly } from '../../database/entities/assembly.entity';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';
import { StatisticsService } from './statistics.service';
import { StatisticsController } from './statistics.controller';

@Module({
  imports: [TypeOrmModule.forFeature([Member, Assembly, District, Region])],
  controllers: [StatisticsController],
  providers: [StatisticsService],
  exports: [StatisticsService],
})
export class StatisticsModule {}
