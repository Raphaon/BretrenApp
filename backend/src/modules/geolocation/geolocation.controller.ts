import { Controller, Get, UseGuards } from '@nestjs/common';
import { GeolocationService } from './geolocation.service';
import { JwtAuthGuard } from '../../common/guards/jwt-auth.guard';
import { RolesGuard } from '../../common/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';

@Controller('geolocation')
@UseGuards(JwtAuthGuard, RolesGuard)
export class GeolocationController {
  constructor(private readonly geolocationService: GeolocationService) {}

  @Get('map')
  @Roles('admin', 'regional-supervisor', 'district-leader', 'pastor')
  mapData() {
    return this.geolocationService.mapData();
  }

  @Get('dead-zones')
  @Roles('admin', 'regional-supervisor')
  deadZones() {
    return this.geolocationService.deadZones();
  }
}
