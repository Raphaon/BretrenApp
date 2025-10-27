FROM node:20-alpine
WORKDIR /app
COPY package*.json ./
RUN npm install -g @ionic/cli || true
RUN npm install || true
COPY . .
EXPOSE 8100
CMD ["ionic", "serve", "--external", "--host", "0.0.0.0", "--port", "8100", "--no-open"]
