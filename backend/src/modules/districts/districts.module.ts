import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';
import { DistrictsService } from './districts.service';
import { DistrictsController } from './districts.controller';

@Module({
  imports: [TypeOrmModule.forFeature([District, Region])],
  controllers: [DistrictsController],
  providers: [DistrictsService],
  exports: [DistrictsService],
})
export class DistrictsModule {}
