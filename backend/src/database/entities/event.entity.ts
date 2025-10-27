import {
  Column,
  CreateDateColumn,
  Entity,
  ManyToOne,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { Region } from './region.entity';
import { District } from './district.entity';
import { Assembly } from './assembly.entity';

@Entity({ name: 'events' })
export class Event {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @Column()
  title!: string;

  @Column({ type: 'text' })
  description!: string;

  @Column({ type: 'timestamp' })
  date!: Date;

  @Column()
  eventType!: string;

  @ManyToOne(() => Region, { eager: true, nullable: true })
  region?: Region;

  @ManyToOne(() => District, { eager: true, nullable: true })
  district?: District;

  @ManyToOne(() => Assembly, { eager: true, nullable: true })
  assembly?: Assembly;

  @Column({ type: 'jsonb', nullable: true })
  metadata?: Record<string, unknown>;

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
