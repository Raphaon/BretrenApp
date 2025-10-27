import {
  Column,
  CreateDateColumn,
  Entity,
  ManyToOne,
  OneToMany,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
} from 'typeorm';
import { Member } from './member.entity';
import { Assembly } from './assembly.entity';

@Entity({ name: 'ministries' })
export class Ministry {
  @PrimaryGeneratedColumn('uuid')
  id!: string;

  @Column()
  name!: string;

  @Column({ nullable: true })
  type?: string;

  @ManyToOne(() => Member, { eager: true, nullable: true })
  leader?: Member;

  @ManyToOne(() => Assembly, { eager: true, nullable: true })
  assembly?: Assembly;

  @OneToMany(() => Member, (member) => member.ministry)
  members!: Member[];

  @CreateDateColumn()
  createdAt!: Date;

  @UpdateDateColumn()
  updatedAt!: Date;
}
