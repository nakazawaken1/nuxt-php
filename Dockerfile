FROM node:14-alpine
ENV CHOKIDAR_USEPOLLING=true
RUN apk update && apk add tzdata git php php-json php-mbstring php-pdo_sqlite