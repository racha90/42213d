# Backend-test. Laravel
### Start Laravel in Docker
```bash
cp .env.exmaple .env
docker-compose up --build -d
```
### Work with Laravel in Docker container
```bash
docker exec -it laravel_app /bin/sh;
php artisan key:generate
php artisan migrate
php artisan db:seed
```
### Stop all containers and delete all stoped images
```bash
docker stop $(docker ps -a -q)
docker system prune --all --force --volumes
```
