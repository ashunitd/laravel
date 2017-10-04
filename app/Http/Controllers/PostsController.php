<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Comment;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    public function create(){
    	return view('posts.create');
    }

    public function store(){
    $this->validate(request(),[

    'title'=>'required',
    'body'=>'required'

    ]);

        Post::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'user_id'=>auth()->id()

            ]);

    	return redirect('/');


    }

    public function addComments(Post $post){
       
        Comment::create([
            
            'body'=>request('body'),
            'post_id'=>$post->id

            ]);

       return back();
    }
}
