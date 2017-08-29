<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*campos asignables */
    
   protected $fillable =['title','body'];

   public function comments()
   {
   	return $this->hasMany('App\Comment');
   }

   
}
