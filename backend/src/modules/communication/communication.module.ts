import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Message } from '../../database/entities/message.entity';
import { User } from '../../database/entities/user.entity';
import { CommunicationService } from './communication.service';
import { CommunicationController } from './communication.controller';
import { CommunicationGateway } from './communication.gateway';

@Module({
  imports: [TypeOrmModule.forFeature([Message, User])],
  controllers: [CommunicationController],
  providers: [CommunicationService, CommunicationGateway],
  exports: [CommunicationService, CommunicationGateway],
})
export class CommunicationModule {}
