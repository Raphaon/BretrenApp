import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Assembly } from '../../database/entities/assembly.entity';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';
import { AssembliesService } from './assemblies.service';
import { AssembliesController } from './assemblies.controller';

@Module({
  imports: [TypeOrmModule.forFeature([Assembly, District, Region])],
  controllers: [AssembliesController],
  providers: [AssembliesService],
  exports: [AssembliesService],
})
export class AssembliesModule {}
