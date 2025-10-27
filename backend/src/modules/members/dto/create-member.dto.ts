import { IsEnum, IsInt, IsOptional, IsString, Max, Min } from 'class-validator';

export class CreateMemberDto {
  @IsString()
  lastName!: string;

  @IsString()
  firstName!: string;

  @IsEnum(['M', 'F'])
  gender!: 'M' | 'F';

  @IsOptional()
  @IsInt()
  @Min(0)
  @Max(120)
  age?: number;

  @IsOptional()
  @IsString()
  role?: string;

  @IsOptional()
  @IsString()
  ministryRole?: string;

  @IsString()
  assemblyId!: string;

  @IsString()
  districtId!: string;

  @IsString()
  regionId!: string;

  @IsOptional()
  @IsString()
  ministryId?: string;
}
