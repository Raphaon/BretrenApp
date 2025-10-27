import { IsOptional, IsString } from 'class-validator';

export class CreateMinistryDto {
  @IsString()
  name!: string;

  @IsOptional()
  @IsString()
  type?: string;

  @IsOptional()
  @IsString()
  leaderId?: string;

  @IsOptional()
  @IsString()
  assemblyId?: string;
}
