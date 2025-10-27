import { IsBoolean, IsEmail, IsEnum, IsOptional, IsString, MinLength } from 'class-validator';
import { UserRole } from '../../../database/entities/user.entity';

export class RegisterDto {
  @IsEmail()
  email!: string;

  @IsString()
  @MinLength(6)
  password!: string;

  @IsEnum(['admin', 'regional-supervisor', 'district-leader', 'pastor', 'ministry-leader', 'member'])
  role!: UserRole;

  @IsOptional()
  @IsString()
  assemblyId?: string;

  @IsOptional()
  @IsBoolean()
  active?: boolean;
}
