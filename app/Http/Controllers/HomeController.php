<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        $pages = Page::all();
        $posts = Post::orderBy('id','desc')->paginate(8);
        return view('home',['pages'=>$pages,'posts' => $posts]);
    }
}
