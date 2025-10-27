import {
  Column,
  CreateDateColumn,
  Entity,
  ManyToOne,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { Assembly } from './assembly.entity';

export type UserRole =
  | 'admin'
  | 'regional-supervisor'
  | 'district-leader'
  | 'pastor'
  | 'ministry-leader'
  | 'member';

@Entity({ name: 'users' })
export class User {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @Column({ unique: true })
  email!: string;

  @Column()
  password!: string;

  @Column({ type: 'enum', enum: ['admin', 'regional-supervisor', 'district-leader', 'pastor', 'ministry-leader', 'member'] })
  role!: UserRole;

  @ManyToOne(() => Assembly, { eager: true, nullable: true })
  assembly?: Assembly;

  @Column({ default: false })
  active!: boolean;

  @Column({ default: false })
  pendingApproval!: boolean;

  @Column({ type: 'jsonb', nullable: true })
  permissionsOverride?: Record<string, boolean>;

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
