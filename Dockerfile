FROM registry.gitlab.com/mb-source/docker-images/php-laravel

WORKDIR /usr/app

# COPDY ALL FILES
COPY . .

RUN chmod -R 775 /usr/app
RUN composer install

EXPOSE 9000
CMD ["php-fpm", "-R"]
