import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Member } from '../../database/entities/member.entity';
import { Assembly } from '../../database/entities/assembly.entity';
import { District } from '../../database/entities/district.entity';
import { Region } from '../../database/entities/region.entity';
import { Ministry } from '../../database/entities/ministry.entity';
import { CreateMemberDto } from './dto/create-member.dto';
import { UpdateMemberDto } from './dto/update-member.dto';

@Injectable()
export class MembersService {
  constructor(
    @InjectRepository(Member)
    private readonly membersRepository: Repository<Member>,
    @InjectRepository(Assembly)
    private readonly assembliesRepository: Repository<Assembly>,
    @InjectRepository(District)
    private readonly districtsRepository: Repository<District>,
    @InjectRepository(Region)
    private readonly regionsRepository: Repository<Region>,
    @InjectRepository(Ministry)
    private readonly ministriesRepository: Repository<Ministry>,
  ) {}

  async create(payload: CreateMemberDto) {
    const assembly = await this.assembliesRepository.findOneBy({ id: payload.assemblyId });
    const district = await this.districtsRepository.findOneBy({ id: payload.districtId });
    const region = await this.regionsRepository.findOneBy({ id: payload.regionId });
    if (!assembly || !district || !region) {
      throw new NotFoundException('Invalid structure references');
    }
    const member = this.membersRepository.create({
      ...payload,
      assembly,
      district,
      region,
    });
    if (payload.ministryId) {
      const ministry = await this.ministriesRepository.findOneBy({ id: payload.ministryId });
      if (ministry) {
        member.ministry = ministry;
      }
    }
    return this.membersRepository.save(member);
  }

  findAll(filters?: { regionId?: string; districtId?: string; assemblyId?: string }) {
    const query = this.membersRepository
      .createQueryBuilder('member')
      .leftJoinAndSelect('member.assembly', 'assembly')
      .leftJoinAndSelect('member.district', 'district')
      .leftJoinAndSelect('member.region', 'region')
      .leftJoinAndSelect('member.ministry', 'ministry');

    if (filters?.regionId) {
      query.andWhere('region.id = :regionId', { regionId: filters.regionId });
    }
    if (filters?.districtId) {
      query.andWhere('district.id = :districtId', { districtId: filters.districtId });
    }
    if (filters?.assemblyId) {
      query.andWhere('assembly.id = :assemblyId', { assemblyId: filters.assemblyId });
    }

    return query.getMany();
  }

  async findOne(id: string) {
    const member = await this.membersRepository.findOne({
      where: { id },
      relations: ['assembly', 'district', 'region', 'ministry'],
    });
    if (!member) {
      throw new NotFoundException('Member not found');
    }
    return member;
  }

  async update(id: string, payload: UpdateMemberDto) {
    const member = await this.findOne(id);
    if (payload.assemblyId) {
      const assembly = await this.assembliesRepository.findOneBy({ id: payload.assemblyId });
      if (!assembly) {
        throw new NotFoundException('Assembly not found');
      }
      member.assembly = assembly;
    }
    if (payload.districtId) {
      const district = await this.districtsRepository.findOneBy({ id: payload.districtId });
      if (!district) {
        throw new NotFoundException('District not found');
      }
      member.district = district;
    }
    if (payload.regionId) {
      const region = await this.regionsRepository.findOneBy({ id: payload.regionId });
      if (!region) {
        throw new NotFoundException('Region not found');
      }
      member.region = region;
    }
    if (payload.ministryId) {
      const ministry = await this.ministriesRepository.findOneBy({ id: payload.ministryId });
      if (!ministry) {
        throw new NotFoundException('Ministry not found');
      }
      member.ministry = ministry;
    }
    Object.assign(member, payload);
    return this.membersRepository.save(member);
  }

  async remove(id: string) {
    const member = await this.findOne(id);
    await this.membersRepository.remove(member);
    return { deleted: true };
  }
}
