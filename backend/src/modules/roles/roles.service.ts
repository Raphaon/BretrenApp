import { Injectable } from '@nestjs/common';

const ROLE_DEFINITIONS = {
  admin: ['read:any', 'write:any', 'transfer', 'publish', 'approve'],
  'regional-supervisor': ['read:region', 'write:region', 'publish:region', 'transfer:region'],
  'district-leader': ['read:district', 'write:district', 'publish:district'],
  pastor: ['read:assembly', 'write:assembly', 'publish:assembly'],
  'ministry-leader': ['read:ministry', 'write:ministry'],
  member: ['read:self'],
};

@Injectable()
export class RolesService {
  listRoles() {
    return ROLE_DEFINITIONS;
  }
}
