import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Ministry } from '../../database/entities/ministry.entity';
import { Member } from '../../database/entities/member.entity';
import { Assembly } from '../../database/entities/assembly.entity';
import { MinistriesService } from './ministries.service';
import { MinistriesController } from './ministries.controller';

@Module({
  imports: [TypeOrmModule.forFeature([Ministry, Member, Assembly])],
  controllers: [MinistriesController],
  providers: [MinistriesService],
  exports: [MinistriesService],
})
export class MinistriesModule {}
