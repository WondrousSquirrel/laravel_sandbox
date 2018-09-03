<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Создание Админа

Необходимо зарегистрироваться на сайте и через тинкер указать:
php artisan tinker
```
use App\User;
User::where('email', 'email@email.com')->update(['type' => 'admin']);
```
