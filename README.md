### Paso para preparar el proyecto y las herramientas que se usan

- Laravel version 7
```bash
composer create-project --prefer-dist laravel/laravel:^7.0
```
- Vue
```bash
composer require laravel/ui:^2.4
php artisan ui vue --auth
```
- Laravel mix purge CSS(https://github.com/spatie/laravel-mix-purgecss)

```bash
npm install
npm run dev
npm run watch
```

- Crear Base de datos
- Configurar el archivo .env

```bash
php artisan migrate
php artisan serve
```