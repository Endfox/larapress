<?php

namespace App\Http\Controllers;

use App\Post;

use App\Page;

use Carbon\Carbon;

use Illuminate\Http\Request;

use DB;

class PostController extends Controller
{
    

    public function showPost($slug){
    	$post = Post::where('slug_url','=',$slug)->get();
    	$pages= Page::all();
    	return view('post.index',['post'=>$post,'pages'=>$pages]);
    }

   	public function search(Request $r){
   		if(!empty($r->input('search'))){
        //Buscar por un campo de texto.
        $search = $r->input('search');
        $pages= Page::all();
        $posts = Post::where('title','like','%'.$search.'%')
          ->orderBy('id','desc')
          ->paginate(10);
        $posts->appends($r->only('search'));
      }
      elseif (!empty($r->input('tag'))) {
        //Buscar por un tag de un post.
        $tag = $r->input('tag');
        $pages= Page::all();
        $posts = Post::join('post_tags','posts.id','=','post_tags.post_id')
        ->join('tags','post_tags.tag_id','=','tags.id')
        ->select('posts.*')
        ->where('tags.name','=',$tag)
          ->paginate(10);
        $posts->appends($r->only('tag'));
      }
    	return view('home',['pages'=>$pages,'posts'=>$posts]);
    }
}
