# Brethren API (NestJS)

This service implements the Brethren management REST API, covering authentication, structure management, communications and statistics.

## Prerequisites
- Node.js 20+
- PostgreSQL 15+

## Setup

```
npm install
npm run build
npm run start:dev
```

Configure environment variables via `.env` or `env/api.env`. Refer to `src/config/configuration.ts` for defaults.

## Modules
- Auth, Roles, Users
- Regions, Districts, Assemblies
- Members, Ministries
- Communications (announcements, chat)
- Statistics, Geolocation, Events

## Testing

```
npm run test
```

## API Docs

Swagger/OpenAPI can be enabled by adding the NestJS Swagger module during bootstrap.
