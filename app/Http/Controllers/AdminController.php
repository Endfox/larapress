<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Post;

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
    	return view('admin.login');
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
        $posts = Post::orderBy('id','desc')->take(5)->get(['title','slug_url']);
        return view('admin.dashboard',['posts'=>$posts]);
    }

    public function closeSession(){
         Auth('admin')->logout();
         return redirect()->route('loginForm');
    }
}
