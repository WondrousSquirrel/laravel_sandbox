<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{
    public function send() {
      Mail::send(['text' => 'mail'], ['name', 'Web dev blog'], function($message){
        $message->to('wondroussquirrel@gmail.com', 'new user')->subject('Test email');
        $message->from('wondroussquirrel@gmail.com', 'new user');
      });
    }
}
