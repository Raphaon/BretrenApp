# Brethren Platform Architecture

This document summarizes the proposed multi-platform architecture for the Brethren management system.

## Overview

The solution is composed of three deployable applications and a shared PostgreSQL database:

- **Backend API (NestJS)** – exposes REST endpoints, WebSocket channels and RBAC-protected services.
- **Web Frontend (Angular 18 + Material)** – administration dashboard for regional, district and assembly leaders.
- **Mobile Application (Ionic + Angular)** – lightweight interface for members and pastors.

Docker images encapsulate each component and a GitHub Actions pipeline automates linting, testing, building and deployment.

## Backend Modules

The NestJS application follows a modular architecture with domain-focused modules:

- `AuthModule` – JWT authentication, registration workflow and password hashing with bcrypt.
- `Regions`, `Districts`, `Assemblies`, `Members`, `Ministries` – CRUD endpoints with hierarchical relations enforced through TypeORM.
- `CommunicationModule` – announcements, circulars and chat via Socket.IO and persisted messages.
- `StatisticsModule` – aggregated indicators (gender, age, structure counts) for dashboards.
- `GeolocationModule` – exposes location data for Google Maps / Leaflet visualizations and placeholders for dead-zone detection.
- `EventsModule` – calendar events for all levels.
- `RolesModule` – centralized RBAC matrix powering the `RolesGuard`.

`AppModule` wires configuration, database, security middleware (Helmet, compression) and real-time gateway registration.

## Database

PostgreSQL stores canonical data. The SQL script in `database/sql/brethren_schema.sql` can bootstrap the schema, including enumerations for gender, member status and user roles.

## Frontend (Angular)

The Angular workspace contains:

- A Material-based layout (toolbar, sidenav) with role-specific navigation.
- Feature modules per domain (e.g., `regions`, `members`, `communications`).
- Reusable UI components for stat cards, data tables, charts and map wrappers (Google Maps + Chart.js integrations planned).
- Services encapsulating HTTP calls, interceptors for JWT tokens, guards for role-based routing and state management via signals.

## Mobile (Ionic)

The Ionic application focuses on essentials:

- Quick access to personal profile, church directory, transfers and events.
- Push-like notifications using the same Socket.IO namespace as the backend.
- Offline-first data caching through Ionic Storage (to be implemented).

## Security & Deployment

- Passwords hashed with bcrypt, JWT access tokens validated on every request.
- NestJS `RolesGuard` checks metadata-defined access levels.
- Helmet, compression, CORS and rate limiting (to be implemented) harden the API.
- Dockerfiles define multi-stage builds. A `docker-compose.yml` orchestrates API, Angular, Ionic (served as PWA) and PostgreSQL.
- GitHub Actions workflows lint, test and build the monorepo before publishing container images.

## Documentation

- API reference is generated through OpenAPI/Swagger (to be enabled) for consumer teams.
- Additional manuals will describe onboarding, transfers, communication best practices and maintenance costs.
