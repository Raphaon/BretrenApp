import { Body, Controller, Delete, Get, Param, Patch, Post, Query, UseGuards } from '@nestjs/common';
import { MembersService } from './members.service';
import { CreateMemberDto } from './dto/create-member.dto';
import { UpdateMemberDto } from './dto/update-member.dto';
import { JwtAuthGuard } from '../../common/guards/jwt-auth.guard';
import { RolesGuard } from '../../common/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';

@Controller('members')
@UseGuards(JwtAuthGuard, RolesGuard)
export class MembersController {
  constructor(private readonly membersService: MembersService) {}

  @Post()
  @Roles('admin', 'regional-supervisor', 'district-leader', 'pastor')
  create(@Body() payload: CreateMemberDto) {
    return this.membersService.create(payload);
  }

  @Get()
  findAll(
    @Query('regionId') regionId?: string,
    @Query('districtId') districtId?: string,
    @Query('assemblyId') assemblyId?: string,
  ) {
    return this.membersService.findAll({ regionId, districtId, assemblyId });
  }

  @Get(':id')
  findOne(@Param('id') id: string) {
    return this.membersService.findOne(id);
  }

  @Patch(':id')
  @Roles('admin', 'regional-supervisor', 'district-leader', 'pastor')
  update(@Param('id') id: string, @Body() payload: UpdateMemberDto) {
    return this.membersService.update(id, payload);
  }

  @Delete(':id')
  @Roles('admin', 'regional-supervisor', 'district-leader')
  remove(@Param('id') id: string) {
    return this.membersService.remove(id);
  }
}
