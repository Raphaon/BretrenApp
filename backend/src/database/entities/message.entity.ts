import {
  Column,
  CreateDateColumn,
  Entity,
  ManyToOne,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { User } from './user.entity';

@Entity({ name: 'messages' })
export class Message {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @ManyToOne(() => User, { eager: true })
  sender!: User;

  @ManyToOne(() => User, { eager: true, nullable: true })
  recipient?: User;

  @Column({ type: 'text' })
  content!: string;

  @Column({ default: 'chat' })
  messageType!: 'chat' | 'announcement' | 'circular';

  @Column({ type: 'jsonb', nullable: true })
  audienceScope?: {
    level: 'region' | 'district' | 'assembly' | 'ministry';
    id?: string;
  };

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
