import {
  Column,
  CreateDateColumn,
  Entity,
  ManyToOne,
  OneToMany,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { District } from './district.entity';
import { Member } from './member.entity';
import { Region } from './region.entity';

@Entity({ name: 'assemblies' })
export class Assembly {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @Column()
  name!: string;

  @ManyToOne(() => District, (district) => district.assemblies, {
    eager: true,
  })
  district!: District;

  @ManyToOne(() => Region, (region) => region.assemblies, {
    eager: true,
  })
  region!: Region;

  @Column({ nullable: true })
  headquarters?: string;

  @Column({ nullable: true })
  pastorId?: string;

  @Column({ type: 'jsonb', nullable: true })
  preachingPoints?: Array<{
    id: string;
    name: string;
    leader?: string;
    coordinates?: { lat: number; lng: number };
  }>;

  @Column({ type: 'jsonb', nullable: true })
  history?: Array<{ title: string; description: string; occurredAt: string }>;

  @Column({ type: 'geography', nullable: true })
  location?: string;

  @OneToMany(() => Member, (member) => member.assembly)
  members!: Member[];

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
