import { Body, Controller, Get, Param, Post, Query, UseGuards } from '@nestjs/common';
import { CommunicationService } from './communication.service';
import { JwtAuthGuard } from '../../common/guards/jwt-auth.guard';
import { RolesGuard } from '../../common/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';

@Controller('communications')
@UseGuards(JwtAuthGuard, RolesGuard)
export class CommunicationController {
  constructor(private readonly communicationService: CommunicationService) {}

  @Post('circulars')
  @Roles('admin', 'regional-supervisor', 'district-leader')
  sendCircular(
    @Body()
    payload: {
      senderId: string;
      audienceScope: { level: 'region' | 'district' | 'assembly' | 'ministry'; id?: string };
      content: string;
    },
  ) {
    return this.communicationService.sendCircular(payload);
  }

  @Post('direct')
  sendDirect(@Body() payload: { senderId: string; recipientId: string; content: string }) {
    return this.communicationService.sendDirectMessage(payload);
  }

  @Get('messages')
  list(@Query('recipientId') recipientId?: string, @Query('senderId') senderId?: string) {
    return this.communicationService.listMessages({ recipientId, senderId });
  }

  @Get('messages/:id')
  get(@Param('id') id: string) {
    return this.communicationService.listMessages({ recipientId: id });
  }
}
