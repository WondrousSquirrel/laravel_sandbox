<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags(){
    	// у одного поста и тега может быть много постов и тегав закрепленных за ним
    	return $this->belongsToMany('App\Model\user\tag', 'post_tags')->withTimeStamps(); // подключаем оригинальную модель и указываем к какой
    }
    public function categories(){
    	// у одного поста и тега может быть много постов и тегав закрепленных за ним
    	return $this->belongsToMany('App\Model\user\category', 'category_posts')->withTimeStamps(); // подключаем оригинальную модель и указываем к какой
    }
    public function getRouteKeyName(){
    	return 'slug';
    }
}
