import { Body, Controller, Delete, Get, Param, Patch, Post, UseGuards } from '@nestjs/common';
import { DistrictsService } from './districts.service';
import { CreateDistrictDto } from './dto/create-district.dto';
import { UpdateDistrictDto } from './dto/update-district.dto';
import { JwtAuthGuard } from '../../common/guards/jwt-auth.guard';
import { RolesGuard } from '../../common/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';

@Controller('districts')
@UseGuards(JwtAuthGuard, RolesGuard)
export class DistrictsController {
  constructor(private readonly districtsService: DistrictsService) {}

  @Post()
  @Roles('admin', 'regional-supervisor')
  create(@Body() payload: CreateDistrictDto) {
    return this.districtsService.create(payload);
  }

  @Get()
  findAll() {
    return this.districtsService.findAll();
  }

  @Get(':id')
  findOne(@Param('id') id: string) {
    return this.districtsService.findOne(id);
  }

  @Patch(':id')
  @Roles('admin', 'regional-supervisor')
  update(@Param('id') id: string, @Body() payload: UpdateDistrictDto) {
    return this.districtsService.update(id, payload);
  }

  @Delete(':id')
  @Roles('admin')
  remove(@Param('id') id: string) {
    return this.districtsService.remove(id);
  }
}
