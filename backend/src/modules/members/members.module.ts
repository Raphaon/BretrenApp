import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Member } from '../../database/entities/member.entity';
import { Assembly } from '../../database/entities/assembly.entity';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';
import { Ministry } from '../../database/entities/ministry.entity';
import { MembersService } from './members.service';
import { MembersController } from './members.controller';

@Module({
  imports: [TypeOrmModule.forFeature([Member, Assembly, District, Region, Ministry])],
  controllers: [MembersController],
  providers: [MembersService],
  exports: [MembersService],
})
export class MembersModule {}
