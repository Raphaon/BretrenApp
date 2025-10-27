import {
  Column,
  CreateDateColumn,
  Entity,
  ManyToOne,
  OneToMany,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { Region } from './region.entity';
import { Assembly } from './assembly.entity';

@Entity({ name: 'districts' })
export class District {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @Column()
  name!: string;

  @ManyToOne(() => Region, (region) => region.districts, { eager: true })
  region!: Region;

  @Column({ nullable: true })
  headquarters?: string;

  @Column({ type: 'jsonb', nullable: true })
  leaders?: Record<string, string>;

  @OneToMany(() => Assembly, (assembly) => assembly.district)
  assemblies!: Assembly[];

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
