import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Message } from '../../database/entities/message.entity';
import { User } from '../../database/entities/user.entity';
import { CommunicationGateway } from './communication.gateway';

@Injectable()
export class CommunicationService {
  constructor(
    @InjectRepository(Message)
    private readonly messagesRepository: Repository<Message>,
    @InjectRepository(User)
    private readonly usersRepository: Repository<User>,
    private readonly gateway: CommunicationGateway,
  ) {}

  async sendCircular(payload: { senderId: string; audienceScope: Message['audienceScope']; content: string }) {
    const sender = await this.usersRepository.findOneBy({ id: payload.senderId });
    if (!sender) {
      throw new Error('Sender not found');
    }
    const message = this.messagesRepository.create({
      sender,
      messageType: 'circular',
      audienceScope: payload.audienceScope,
      content: payload.content,
    });
    const saved = await this.messagesRepository.save(message);
    const channel = `${payload.audienceScope?.level}:${payload.audienceScope?.id ?? 'all'}`;
    this.gateway.sendAnnouncement({ channel, message: payload.content });
    return saved;
  }

  async sendDirectMessage(payload: { senderId: string; recipientId: string; content: string }) {
    const sender = await this.usersRepository.findOneBy({ id: payload.senderId });
    const recipient = await this.usersRepository.findOneBy({ id: payload.recipientId });
    if (!sender || !recipient) {
      throw new Error('Invalid participants');
    }
    const message = this.messagesRepository.create({
      sender,
      recipient,
      messageType: 'chat',
      content: payload.content,
    });
    const saved = await this.messagesRepository.save(message);
    this.gateway.sendDirectMessage({
      to: recipient.id,
      from: sender.id,
      message: payload.content,
    });
    return saved;
  }

  listMessages(filter: { recipientId?: string; senderId?: string }) {
    const query = this.messagesRepository
      .createQueryBuilder('message')
      .leftJoinAndSelect('message.sender', 'sender')
      .leftJoinAndSelect('message.recipient', 'recipient');
    if (filter.recipientId) {
      query.andWhere('recipient.id = :recipientId', { recipientId: filter.recipientId });
    }
    if (filter.senderId) {
      query.andWhere('sender.id = :senderId', { senderId: filter.senderId });
    }
    return query.orderBy('message.createdAt', 'DESC').getMany();
  }
}
