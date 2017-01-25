<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

	protected $fillable = ['body'];

	public function book(){
		return $this->belongTo('App\Book');
	}
}
