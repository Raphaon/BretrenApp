import { Body, Controller, Delete, Get, Param, Patch, Post, UseGuards } from '@nestjs/common';
import { MinistriesService } from './ministries.service';
import { CreateMinistryDto } from './dto/create-ministry.dto';
import { UpdateMinistryDto } from './dto/update-ministry.dto';
import { JwtAuthGuard } from '../../common/guards/jwt-auth.guard';
import { RolesGuard } from '../../common/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';

@Controller('ministries')
@UseGuards(JwtAuthGuard, RolesGuard)
export class MinistriesController {
  constructor(private readonly ministriesService: MinistriesService) {}

  @Post()
  @Roles('admin', 'pastor')
  create(@Body() payload: CreateMinistryDto) {
    return this.ministriesService.create(payload);
  }

  @Get()
  findAll() {
    return this.ministriesService.findAll();
  }

  @Get(':id')
  findOne(@Param('id') id: string) {
    return this.ministriesService.findOne(id);
  }

  @Patch(':id')
  @Roles('admin', 'pastor', 'ministry-leader')
  update(@Param('id') id: string, @Body() payload: UpdateMinistryDto) {
    return this.ministriesService.update(id, payload);
  }

  @Delete(':id')
  @Roles('admin')
  remove(@Param('id') id: string) {
    return this.ministriesService.remove(id);
  }
}
