# Desarrollo web con Laravel 9

## Ejecutar los seeder

```bash
sail artisan db:seed
```

## deploy firt time

[Deploy laravel 9](https://programacionymas.com/blog/hacer-deploy-app-laravel-digital-ocean)

### Crear la base de datos y cambiar contraseña

```bash
mysql -u root -p
create database new_sail_application;
```

```bash
UPDATE mysql.user SET Host='%' WHERE User='root' AND Host='localhost';
FLUSH PRIVILEGES; 
SHOW PLUGINS;
ALTER USER root IDENTIFIED WITH caching_sha2_password BY '5tqDXE2p'; 
FLUSH PRIVILEGES;
```

### Configuración

```bash
composer install
cp .env.example .env
php composer key:generate // cuidado.
nano .env
npm install
npm build
```

Info: [Deploy Laravel 9](https://laravel.com/docs/9.x/deployment)

```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
