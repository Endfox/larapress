<?php

namespace App\Http\Controllers;

use App\Page;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        $pages = Page::all();
        return view('home',['pages'=>$pages]);
    }
}
