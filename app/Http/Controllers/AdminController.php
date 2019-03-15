<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Support\Str as Str;

use App\User;
use App\Post;
use App\Page;

class AdminController extends Controller
{ 
    //
    public function __construct(){
        /*Al inicio del controlador se hará una verificacion
      excepto en los metodos de esta clase llamados
      showLoginForm y login.
      */
       $this->middleware('admin',['except'=>[
        'loginForm','loginValidation','closeSession'
      ]]);
       
    }

    use AuthenticatesUsers;

    public function loginForm(){
        if(Auth::guard('admin')->check()==false){
            return view('admin.login');
        }
        else{
            return redirect()->route('adminDashboard');
        }
    }

    public function loginValidation(){
        try{

            //Recoge los datos enviados en el formulario  y los valida
            //guardandolos al final en un array en la variable credentials
            $credentials = $this->validate(request(),[
                'email' => 'string|email|required',
                'password' => 'string|required'
            ]);

            //Hace la consulta con el guard admins creado en el archivo
            //config auth.
            //si son correctos iniciará sesión.
            if (Auth::guard('admin')->attempt($credentials)) {
                //Redireccionará al usuario a la ruta admin.main
                return redirect()->route('adminDashboard');
            }
            else{
                //Si los datos no son correctos, lo regresará al formulario
                return back()->withErrors(['message' => 'Los datos no son correctos']);
            }
        }
            catch(\Exception $e){
        }
    }

    public function dashboard(){
        $user = Auth::guard('admin')->user();
        $pages = Page::all();
        $posts = Post::orderBy('id','desc')->take(5)->get(['title','slug_url']);
        return view('admin.dashboard',['posts'=>$posts,'pages' => $pages]);
    }

    public function closeSession(){
         Auth('admin')->logout();
         return redirect()->route('loginForm');
    }

    public function pages(){
        $pages = Page::all();
        return view('admin.pages.index',['pages' => $pages]);
    }

    public function savePage(Request $r){
        $page = new Page();
        $page->name = $r->name;
        $page->url_name = Str::slug($r->url);
        $page->save();
        return redirect()->route('adminPages');
    }

    public function users(){
        $users = User::select('name','email')->orderBy('id','desc')->get();
        return view('admin.users.index',['users'=>$users]);
    }

    public function posts(){
        return view('admin.posts.index');
    }

    public function savePosts(Request $r){
        dd($r);
    }
}
