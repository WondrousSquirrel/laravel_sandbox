<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

Содержание
=================
1.  [Песочница](#Песочница)
2.  [Установка](#Установка)
3.  [Реализованно](#Реализованно)
4.  [Автор](#Автор)


# Песочница

Проект на laravel, где будут постепенно добавляться различный функционал и возможности. Один сборный проект, для изучение и проб.

# Установка

### Скачать репозиторий или выполнить команду:

```
git clone https://github.com/WondrousSquirrel/laravel_sandbox.git
```
### Перейти в папку с проектом и установить зависимости

```
cd laravel_sandbox/
composer install
```

### Создать файл .env
```
cp .env.example .env
```

### Сгенерировать ключи шифрования

```
php artisan key:generate
```

### Создать БД и настроить .env

Создать новую БД и заполнить файл .env

```
DB_CONNECTION=драйвер БД
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=username_pass
```

### Миграция Базы Данных

```
php artisan migrate
```

### Добавить Админа

Необходимо зарегистрироваться на сайте и через тинкер указать:

```
php artisan tinker

use App\User;
User::where('email', 'email@email.com')->update(['type' => 'admin']);
```
### Создать символическую ссылку

```
php artisan storage:link
```

# Реализованно

### Админ страница

* Логин в админку
* Посты
* Категории
* Теги
* Отправка эл. письма при регистрации

### Страница пользователя

* Исправить выпадающую ссылку в навигации.
* Сделать пользовательскую часть на vue.js


# Автор

**Александр Антощук**

# Лицензия

Фрейворк Laravel  открытое программное обеспечение, находящееся под [MIT license](https://opensource.org/licenses/MIT).
