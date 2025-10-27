# Backend API Dockerfile
FROM node:20-alpine AS base
WORKDIR /app
COPY package*.json ./
RUN npm install --only=production || true
COPY . .
RUN npm run build || true

FROM node:20-alpine
WORKDIR /app
COPY --from=base /app/dist ./dist
COPY package*.json ./
RUN npm install --only=production || true
ENV NODE_ENV=production
CMD ["node", "dist/main.js"]
