import { OnGatewayConnection, OnGatewayDisconnect, OnGatewayInit, WebSocketGateway, WebSocketServer } from '@nestjs/websockets';
import { Server, Socket } from 'socket.io';

@WebSocketGateway({ namespace: 'communications', cors: { origin: '*' } })
export class CommunicationGateway implements OnGatewayInit, OnGatewayConnection, OnGatewayDisconnect {
  @WebSocketServer()
  server!: Server;

  afterInit() {
    // eslint-disable-next-line no-console
    console.log('Communication gateway initialized');
  }

  handleConnection(socket: Socket) {
    socket.emit('connected', { message: 'Welcome to Brethren chat' });
  }

  handleDisconnect(socket: Socket) {
    socket.leaveAll();
  }

  sendAnnouncement(payload: { channel: string; message: string }) {
    this.server.to(payload.channel).emit('announcement', payload);
  }

  sendDirectMessage(payload: { to: string; from: string; message: string }) {
    this.server.to(payload.to).emit('direct-message', payload);
  }
}
