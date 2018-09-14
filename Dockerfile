FROM php:fpm-alpine

RUN apk add --update postgresql-dev \
    && docker-php-ext-install pgsql \
    && apk del \
	postgresql-libs \
	libsasl \
	db
