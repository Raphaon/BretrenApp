import {
  Column,
  CreateDateColumn,
  Entity,
  OneToMany,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { District } from './district.entity';
import { Assembly } from './assembly.entity';

@Entity({ name: 'regions' })
export class Region {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @Column({ unique: true })
  name!: string;

  @Column({ unique: true })
  code!: string;

  @Column({ nullable: true })
  headquarters?: string;

  @Column({ type: 'jsonb', nullable: true })
  executiveBoard?: Record<string, string>;

  @OneToMany(() => District, (district) => district.region)
  districts!: District[];

  @OneToMany(() => Assembly, (assembly) => assembly.region)
  assemblies!: Assembly[];

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
