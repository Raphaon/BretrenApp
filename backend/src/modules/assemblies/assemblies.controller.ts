import { Body, Controller, Delete, Get, Param, Patch, Post, UseGuards } from '@nestjs/common';
import { AssembliesService } from './assemblies.service';
import { CreateAssemblyDto } from './dto/create-assembly.dto';
import { UpdateAssemblyDto } from './dto/update-assembly.dto';
import { JwtAuthGuard } from '../../common/guards/jwt-auth.guard';
import { RolesGuard } from '../../common/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';

@Controller('assemblies')
@UseGuards(JwtAuthGuard, RolesGuard)
export class AssembliesController {
  constructor(private readonly assembliesService: AssembliesService) {}

  @Post()
  @Roles('admin', 'regional-supervisor', 'district-leader')
  create(@Body() payload: CreateAssemblyDto) {
    return this.assembliesService.create(payload);
  }

  @Get()
  findAll() {
    return this.assembliesService.findAll();
  }

  @Get(':id')
  findOne(@Param('id') id: string) {
    return this.assembliesService.findOne(id);
  }

  @Patch(':id')
  @Roles('admin', 'regional-supervisor', 'district-leader')
  update(@Param('id') id: string, @Body() payload: UpdateAssemblyDto) {
    return this.assembliesService.update(id, payload);
  }

  @Delete(':id')
  @Roles('admin')
  remove(@Param('id') id: string) {
    return this.assembliesService.remove(id);
  }
}
