import {
  Column,
  CreateDateColumn,
  Entity,
  ManyToOne,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { Assembly } from './assembly.entity';
import { District } from './district.entity';
import { Region } from './region.entity';
import { Ministry } from './ministry.entity';

@Entity({ name: 'members' })
export class Member {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @Column()
  lastName!: string;

  @Column()
  firstName!: string;

  @Column({ type: 'enum', enum: ['M', 'F'] })
  gender!: 'M' | 'F';

  @Column({ type: 'int', nullable: true })
  age?: number;

  @Column({ nullable: true })
  role?: string;

  @Column({ nullable: true })
  ministryRole?: string;

  @Column({ default: 'active' })
  status!: 'active' | 'inactive' | 'transferred';

  @ManyToOne(() => Assembly, (assembly) => assembly.members, { eager: true })
  assembly!: Assembly;

  @ManyToOne(() => District, { eager: true })
  district!: District;

  @ManyToOne(() => Region, { eager: true })
  region!: Region;

  @ManyToOne(() => Ministry, (ministry) => ministry.members, {
    eager: true,
    nullable: true,
  })
  ministry?: Ministry;

  @Column({ type: 'jsonb', nullable: true })
  transferHistory?: Array<{
    fromAssemblyId?: string;
    toAssemblyId: string;
    reason?: string;
    transferredAt: string;
  }>;

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
