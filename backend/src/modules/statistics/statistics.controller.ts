import { Controller, Get, Param, UseGuards } from '@nestjs/common';
import { StatisticsService } from './statistics.service';
import { JwtAuthGuard } from '../../common/guards/jwt-auth.guard';
import { RolesGuard } from '../../common/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';

@Controller('statistics')
@UseGuards(JwtAuthGuard, RolesGuard)
export class StatisticsController {
  constructor(private readonly statisticsService: StatisticsService) {}

  @Get('global')
  @Roles('admin', 'regional-supervisor')
  global() {
    return this.statisticsService.globalOverview();
  }

  @Get('region/:id')
  @Roles('admin', 'regional-supervisor')
  region(@Param('id') id: string) {
    return this.statisticsService.regionBreakdown(id);
  }
}
