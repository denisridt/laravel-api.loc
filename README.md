## Установка проекта из репозитории
1. Склонируйте репотозиторий
```sh
cd domains
git clone https://github.com/denisridt/laravel-api.loc.git
```
2. Перейдите в папку с проектом и установите composer -зависимости
```sh
cd latavel-api.loc
composer install 
```
3. Скопируйте файл .env.example в .env 
```sh
cp .env.example в .env 
```
4. Сгенерируйте ключи шифрования
```sh
php artisan key:generate
```
5. Измените файл конфигурации .env(Пример для Бд MySql)
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Имя_БД
DB_USERNAME=Логин_пользователя_БД
DB_PASSWORD=Пароль_пользователя_БД

SESSION_DRIVER=file
```

## Пустой проект
Создан в OpenServer следующими командами:
```sh
cd domains
mkdir laravel-api.loc
cd laravel-api.loc
composer self-update
composer create-project laravel/laravel .
php artisan install:api
php artisan config:publish cors
php artisan storage:link
```
В корне проекта создан файл .htaccess
```php
RewriteEngine on
RewrireRule ^(.*)$ public/$1 [L]
```
