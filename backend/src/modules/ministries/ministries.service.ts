import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Ministry } from '../../database/entities/ministry.entity';
import { Member } from '../../database/entities/member.entity';
import { Assembly } from '../../database/entities/assembly.entity';
import { CreateMinistryDto } from './dto/create-ministry.dto';
import { UpdateMinistryDto } from './dto/update-ministry.dto';

@Injectable()
export class MinistriesService {
  constructor(
    @InjectRepository(Ministry)
    private readonly ministriesRepository: Repository<Ministry>,
    @InjectRepository(Member)
    private readonly membersRepository: Repository<Member>,
    @InjectRepository(Assembly)
    private readonly assembliesRepository: Repository<Assembly>,
  ) {}

  async create(payload: CreateMinistryDto) {
    const ministry = this.ministriesRepository.create(payload);
    if (payload.leaderId) {
      const leader = await this.membersRepository.findOneBy({ id: payload.leaderId });
      if (!leader) {
        throw new NotFoundException('Leader not found');
      }
      ministry.leader = leader;
    }
    if (payload.assemblyId) {
      const assembly = await this.assembliesRepository.findOneBy({ id: payload.assemblyId });
      if (!assembly) {
        throw new NotFoundException('Assembly not found');
      }
      ministry.assembly = assembly;
    }
    return this.ministriesRepository.save(ministry);
  }

  findAll() {
    return this.ministriesRepository.find({ relations: ['leader', 'assembly', 'members'] });
  }

  async findOne(id: string) {
    const ministry = await this.ministriesRepository.findOne({
      where: { id },
      relations: ['leader', 'assembly', 'members'],
    });
    if (!ministry) {
      throw new NotFoundException('Ministry not found');
    }
    return ministry;
  }

  async update(id: string, payload: UpdateMinistryDto) {
    const ministry = await this.findOne(id);
    if (payload.leaderId) {
      const leader = await this.membersRepository.findOneBy({ id: payload.leaderId });
      if (!leader) {
        throw new NotFoundException('Leader not found');
      }
      ministry.leader = leader;
    }
    if (payload.assemblyId) {
      const assembly = await this.assembliesRepository.findOneBy({ id: payload.assemblyId });
      if (!assembly) {
        throw new NotFoundException('Assembly not found');
      }
      ministry.assembly = assembly;
    }
    Object.assign(ministry, payload);
    return this.ministriesRepository.save(ministry);
  }

  async remove(id: string) {
    const ministry = await this.findOne(id);
    await this.ministriesRepository.remove(ministry);
    return { deleted: true };
  }
}
