import { IsOptional, IsString } from 'class-validator';

export class CreateAssemblyDto {
  @IsString()
  name!: string;

  @IsString()
  districtId!: string;

  @IsString()
  regionId!: string;

  @IsOptional()
  @IsString()
  headquarters?: string;

  @IsOptional()
  @IsString()
  pastorId?: string;
}
