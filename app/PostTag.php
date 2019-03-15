<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Pivot
{
    

    protected $table = 'post_tags';

    protected $fillable=['post_id','tag_id'];

	public function tag(){
		return $this->belongsTo('App\Tag');
	}
    
}
