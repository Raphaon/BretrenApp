import { Module, OnModuleInit } from '@nestjs/common';
import { ConfigModule, ConfigService } from '@nestjs/config';
import { TypeOrmModule } from '@nestjs/typeorm';
import configuration from '../config/configuration';
import { RegionsModule } from '../modules/regions/regions.module';
import { DistrictsModule } from '../modules/districts/districts.module';
import { AssembliesModule } from '../modules/assemblies/assemblies.module';
import { MembersModule } from '../modules/members/members.module';
import { MinistriesModule } from '../modules/ministries/ministries.module';
import { CommunicationModule } from '../modules/communication/communication.module';
import { StatisticsModule } from '../modules/statistics/statistics.module';
import { GeolocationModule } from '../modules/geolocation/geolocation.module';
import { RolesModule } from '../modules/roles/roles.module';
import { EventsModule } from '../modules/events/events.module';
import { MessagesModule } from '../modules/messages/messages.module';
import { AuthModule } from '../modules/auth/auth.module';
import { User } from '../database/entities/user.entity';
import { Region } from '../database/entities/region.entity';
import { District } from '../database/entities/district.entity';
import { Assembly } from '../database/entities/assembly.entity';
import { Member } from '../database/entities/member.entity';
import { Ministry } from '../database/entities/ministry.entity';
import { Event } from '../database/entities/event.entity';
import { Message } from '../database/entities/message.entity';
import { Socket } from 'socket.io';
import { CommunicationGateway } from '../modules/communication/communication.gateway';

@Module({
  imports: [
    ConfigModule.forRoot({
      isGlobal: true,
      load: [configuration],
    }),
    TypeOrmModule.forRootAsync({
      inject: [ConfigService],
      useFactory: (configService: ConfigService) => ({
        type: 'postgres',
        host: configService.get('database.host'),
        port: configService.get('database.port'),
        username: configService.get('database.username'),
        password: configService.get('database.password'),
        database: configService.get('database.name'),
        synchronize: false,
        entities: [
          User,
          Region,
          District,
          Assembly,
          Member,
          Ministry,
          Event,
          Message,
        ],
      }),
    }),
    AuthModule,
    RegionsModule,
    DistrictsModule,
    AssembliesModule,
    MembersModule,
    MinistriesModule,
    CommunicationModule,
    StatisticsModule,
    GeolocationModule,
    RolesModule,
    EventsModule,
    MessagesModule,
  ],
  providers: [CommunicationGateway],
})
export class AppModule implements OnModuleInit {
  private socketServer?: Socket['server'];

  configureSockets(server: Socket['server']) {
    this.socketServer = server;
  }

  onModuleInit() {
    if (!this.socketServer) {
      return;
    }
    this.socketServer.on('connection', (socket) => {
      socket.on('disconnect', () => undefined);
    });
  }
}
