<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Если происходит попытка войти не зарегистрированным пользователем
        // происходит редирект на форму входа для админа
        if(auth()->user() == null) {
            return redirect('admin-login');
        }

        if(auth()->user()->isAdmin()) {
            return $next($request);
        }

        return redirect('home');
    }
}