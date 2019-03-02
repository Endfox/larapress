<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{ 
    //
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
                return redirect()->route('dashboardAdmin');
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
        return view('admin.dashboard');
    }
}
