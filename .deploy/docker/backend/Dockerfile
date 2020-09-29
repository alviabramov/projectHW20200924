FROM php:7.4-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y
# pdo_mysql
RUN apt-get install -y \
      libpq-dev && \
    docker-php-ext-install -j$(nproc) \
      pdo_mysql

COPY .deploy/docker/backend/entrypoint.sh /entrypoint-component.sh

EXPOSE 9000

CMD ["/entrypoint-component.sh"]