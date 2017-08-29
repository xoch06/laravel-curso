<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;

class CommentsController extends Controller

{
    public function store(Post $post)
    {
      $this->validate(request(),array(
         'body' => 'required'));
      
      $Comment =new Comment();
      $Comment->post_id =$post->id;
      $comment->body = request('body');
      $comment->save();

       return back();
    }

     

}

