<?php
 
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    
    protected $table ='admins';

    protected $guard ='admin';

    protected $fillable =[
    	'name','last_name','email'
    ];

    protected $hidden = [
    	'password'
    ];


}
