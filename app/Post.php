<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $table = 'posts';

    protected $fillable = [
    	'title', 'content', 'slug_url', 'admin_id'
    ];

    public function comments(){
    	return $this->hasMany('App\Comment','post_id');
    }

    public function tags(){
        return $this->hasMany('App\PostTag','post_id');
    }

    public function getCreatePostAttribute(){
    	$nombre_dia = Carbon::parse($this->created_at)->locale('es_MX')->dayName;
    	$numero_dia = Carbon::parse($this->created_at)->day;
    	$mes_nombre = Carbon::parse($this->created_at)->locale('es_MX')->monthName;
    	$anio = Carbon::parse($this->created_at)->year;
    	return $nombre_dia.' '.$numero_dia.' de '.$mes_nombre.' del '.$anio;
    }


    

}
