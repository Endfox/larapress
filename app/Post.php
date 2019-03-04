<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $table = 'posts';

    protected $fillable = [
    	'title', 'content', 'slug_url', 'admin_id'
    ];

    public function comments(){
    	return $this->hasMany('App\Comment','post_id');
    }
}
