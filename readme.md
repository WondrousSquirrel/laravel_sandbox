<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## О проекте

Песочница для применения и использования изученного функционалла
## Установка

Скачать репозиторий или выполнить команду:

```
git clone https://github.com/WondrousSquirrel/laravel_sandbox.git
```
Перейти в папку с проектом и установить зависимости

```
cd laravel_sandbox/
composer install
```

Создать файл .env
```
cp .env.example .env
```

Сгенерировать ключи шифрования

```
php artisan key:generate
```

Создать БД и настроить .env

Миграция Базы Данных

```
php artisan migrate
```

### Добавление Админа

Необходимо зарегистрироваться на сайте и через тинкер указать:

```
php artisan tinker

use App\User;
User::where('email', 'email@email.com')->update(['type' => 'admin']);
```


## Автор

**Александр Антощук**

## License

Фрейворк Laravel  открытое программное обеспечение, находящееся под [MIT license](https://opensource.org/licenses/MIT).