export default () => ({
  port: parseInt(process.env.PORT ?? '3000', 10),
  jwt: {
    secret: process.env.JWT_SECRET ?? 'change-me',
    expiresIn: process.env.JWT_EXPIRES ?? '1d',
  },
  database: {
    host: process.env.DB_HOST ?? 'localhost',
    port: parseInt(process.env.DB_PORT ?? '5432', 10),
    username: process.env.DB_USERNAME ?? 'brethren',
    password: process.env.DB_PASSWORD ?? 'brethren',
    name: process.env.DB_NAME ?? 'brethren',
  },
  storage: {
    uploadPath: process.env.UPLOAD_PATH ?? 'uploads',
  },
});
