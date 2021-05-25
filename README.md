<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Разворачиваем проект

- убедиться, что на компьютере установлены node, npm, composer
- пулим проект
- делаем composer install
- делаем npm install
- делаем npm run dev/prod/watch-poll, в завсимости от того, что мы хотим
- файл со скриптами и стилями будет расположен в public/js public/css файлах

## Разворачиваем проект с помощью docker & docker-compose

- вписываем данные для подключения к БД из docker контейнера:
    - DB_HOST=mars_db
    - DB_PORT=3306
    - DB_DATABASE=mars
    - DB_USERNAME=mars
    - DB_PASSWORD=secret

- выполняем команду docker-compose up -d
- заходим на localhost:8080 - должна открыться стартовая страница проекта
- накатываем дамп базы с минимально необходимым набором тестовых данных, выполняем в корне проекта:
- docker exec -it mars_db /bin/sh - заходим в контейнер базы
- cd /var/lib/mysql - переходим в папку с дампом
- mysql -umars -psecret mars < mars.sql - сама команда импорта данных (можно подставить свои конфиги, указав их в docker-compose.yml)
- по адресу localhost:8765 доступен phpmyadmin, где можно посмотреть в БД

## Разваорачиваем проект без docker

- убедиться, что установлены php, mysql, composer, node, npm
- накатить дамп базы, взяв его отсюда docker/data/mysql/mars.sql командой mysql -uuser -ppassword dbname < /path/to/dump
- выполнить php artisan serve

### Примечания

- frontend проекта совемещен с backend и расположен в папке resources/js
  все роуты разделены на обычные и API-роуты (проще - асинхронные запросы, их выносим в папку Controllers/Api)
  схема API-роутов расположена в public/swagger.yaml, можно посмотреть, открыв через https://editor.swagger.io/
- в Repositories храним методы запроса данных из БД
- в Factories храним описание создания eloquent моделей
- в Services храним основную бизнес-логику приложения
