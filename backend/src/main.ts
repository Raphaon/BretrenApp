import { NestFactory } from '@nestjs/core';
import { AppModule } from './app/app.module';
import { ValidationPipe } from '@nestjs/common';
import { ConfigService } from '@nestjs/config';
import { NestExpressApplication } from '@nestjs/platform-express';
import * as compression from 'compression';
import * as helmet from 'helmet';
import { json, urlencoded } from 'express';
import { createServer } from 'http';
import { Server } from 'socket.io';

async function bootstrap() {
  const app = await NestFactory.create<NestExpressApplication>(AppModule, {
    cors: true,
  });

  app.useGlobalPipes(
    new ValidationPipe({
      whitelist: true,
      transform: true,
      forbidNonWhitelisted: true,
    }),
  );

  app.use(helmet.default());
  app.use(compression());
  app.use(json({ limit: '5mb' }));
  app.use(urlencoded({ extended: true }));

  const httpAdapter = app.getHttpAdapter().getInstance();
  const server = createServer(httpAdapter);
  const io = new Server(server, {
    cors: {
      origin: '*',
    },
  });

  app.get(AppModule).configureSockets(io);

  const configService = app.get(ConfigService);
  const port = configService.get('PORT') || 3000;
  await app.init();
  await new Promise<void>((resolve) => {
    server.listen(port, () => resolve());
  });
  // eslint-disable-next-line no-console
  console.log(`Brethren API listening on port ${port}`);
}

bootstrap();
