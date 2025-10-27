import { IsOptional, IsString } from 'class-validator';

export class CreateDistrictDto {
  @IsString()
  name!: string;

  @IsString()
  regionId!: string;

  @IsOptional()
  @IsString()
  headquarters?: string;

  @IsOptional()
  leaders?: Record<string, string>;
}
