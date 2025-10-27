import { IsOptional, IsString, Length } from 'class-validator';

export class CreateRegionDto {
  @IsString()
  name!: string;

  @IsString()
  @Length(2, 5)
  code!: string;

  @IsOptional()
  @IsString()
  headquarters?: string;

  @IsOptional()
  executiveBoard?: Record<string, string>;
}
