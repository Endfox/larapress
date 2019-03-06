<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUsers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function login(Request $r){
    	$validate_datas = $r->validate([
    		'email' => 'required | email',
    		'password' => 'required '
    	]);
        if (Auth::guard('user')->attempt($validate_datas)) {
            //Redireccionará al usuario a la ruta admin.main
            return redirect()->route('home');
        }
    }

    public function store(StoreUsers $request){
    	$validate = $request->validated();
    	$datas = User::create([
    		'name' => $validate['name'],
    		'email' => $validate['email'],
    		'password' => bcrypt($validate['password']),
    	]);
        Session::flash('message','El usuario se ha registrado correctamente');
        return redirect()->route('home');
    }

    public function logout(){
        Auth('user')->logout();
         return redirect()->route('home');
    }
}
