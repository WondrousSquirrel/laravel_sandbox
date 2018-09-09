<?php

namespace App\Http\Controllers\user;

use App\Model\user\post;
use App\Model\user\category;
use App\Model\user\tag;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index() {
      $posts = post::orderBy('created_at', 'DESC')->paginate(10);
      return view('user.blog', compact('posts'));
    }

    public function tag(tag $tag) {
      $posts = $tag->posts();
      return view('user.blog', compact('posts'));
    }

    public function category(category $category) {
      $posts = $category->posts();
      return view('user.blog', compact('posts'));
    }
}
