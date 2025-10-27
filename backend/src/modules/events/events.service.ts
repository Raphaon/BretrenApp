import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Event } from '../../database/entities/event.entity';
import { Region } from '../../database/entities/region.entity';
import { District } from '../../database/entities/district.entity';
import { Assembly } from '../../database/entities/assembly.entity';
import { CreateEventDto } from './dto/create-event.dto';
import { UpdateEventDto } from './dto/update-event.dto';

@Injectable()
export class EventsService {
  constructor(
    @InjectRepository(Event)
    private readonly eventsRepository: Repository<Event>,
    @InjectRepository(Region)
    private readonly regionsRepository: Repository<Region>,
    @InjectRepository(District)
    private readonly districtsRepository: Repository<District>,
    @InjectRepository(Assembly)
    private readonly assembliesRepository: Repository<Assembly>,
  ) {}

  async create(payload: CreateEventDto) {
    const event = this.eventsRepository.create({
      ...payload,
      date: new Date(payload.date),
    });
    if (payload.regionId) {
      event.region = await this.regionsRepository.findOneBy({ id: payload.regionId });
    }
    if (payload.districtId) {
      event.district = await this.districtsRepository.findOneBy({ id: payload.districtId });
    }
    if (payload.assemblyId) {
      event.assembly = await this.assembliesRepository.findOneBy({ id: payload.assemblyId });
    }
    return this.eventsRepository.save(event);
  }

  findAll() {
    return this.eventsRepository.find({ relations: ['region', 'district', 'assembly'], order: { date: 'DESC' } });
  }

  async findOne(id: string) {
    const event = await this.eventsRepository.findOne({
      where: { id },
      relations: ['region', 'district', 'assembly'],
    });
    if (!event) {
      throw new NotFoundException('Event not found');
    }
    return event;
  }

  async update(id: string, payload: UpdateEventDto) {
    const event = await this.findOne(id);
    Object.assign(event, payload);
    if (payload.date) {
      event.date = new Date(payload.date);
    }
    return this.eventsRepository.save(event);
  }

  async remove(id: string) {
    const event = await this.findOne(id);
    await this.eventsRepository.remove(event);
    return { deleted: true };
  }
}
