<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
	
    public function index() 
    {
        //$posts  = Post::all();
        $posts = Post::latest()->get();
	    return view('posts.index', compact('posts'));
	}	
    

 	
	public function show(Post $post) 
    {
        return view('posts.show', compact('post')); 
    }   

    public function create()
    {
    	 //crear un nuevo post
         //guardarlo en la base
        //Redireccionar al index
        return view('posts.create');	
    }

    
     public function store()
     {
          //dd(request()->all();

    $this->validate(request(),array(
        'title' => 'required',
         'body' => 'required'
         ));
    

        /*$post =new Post();
        $post->title =request('title');
        $post->body =request('body');
         $post->save();*/
         
        /*Post::create(
        request(array('title','body'))
        );*/
         
      Post::create(request()->all()); 
         

        return redirect('/');
     }
}


