# Brethren API – Endpoint Summary

Base URL: `https://{host}/api`

| Method | Path | Description | Auth |
| ------ | ---- | ----------- | ---- |
| POST | /auth/login | Authenticate user and obtain JWT token | No |
| POST | /auth/register | Submit registration request | No |
| GET | /regions | List regions with districts and assemblies | JWT |
| POST | /regions | Create a new region (admin) | JWT + Admin |
| PATCH | /regions/{id} | Update region | JWT + Admin/Regional |
| DELETE | /regions/{id} | Remove region | JWT + Admin |
| GET | /districts | List districts | JWT |
| POST | /districts | Create district | JWT + Admin/Regional |
| GET | /assemblies | List assemblies | JWT |
| POST | /assemblies | Create assembly | JWT + Admin/Regional/District |
| GET | /members | Filter members | JWT |
| POST | /members | Create member | JWT + Admin/Regional/District/Pastor |
| PATCH | /members/{id} | Update member | JWT + Admin/Regional/District/Pastor |
| DELETE | /members/{id} | Delete member | JWT + Admin/Regional/District |
| GET | /ministries | List ministries | JWT |
| POST | /ministries | Create ministry | JWT + Admin/Pastor |
| GET | /communications/messages | List messages | JWT |
| POST | /communications/circulars | Send circular | JWT + Elevated roles |
| POST | /communications/direct | Direct message | JWT |
| GET | /statistics/global | Aggregated indicators | JWT + Admin/Regional |
| GET | /statistics/region/{id} | Region-level stats | JWT + Admin/Regional |
| GET | /geolocation/map | Map dataset for Google Maps | JWT + Leaders |
| GET | /events | List events | JWT |
| POST | /events | Create event | JWT + Leaders |

The Socket.IO namespace `communications` exposes:

- `announcement` event – broadcast announcements.
- `direct-message` event – direct chat messages.

Refer to the NestJS controllers for request/response schemas.
