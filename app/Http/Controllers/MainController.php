<?php

namespace App\Http\Controllers;

use App\Post;

class MainController extends Controller
{
    public function index(){
    	$tasks=Post::latest()->get();        //DB::table('tasks')->get();



    return view('posts.index',compact('tasks'));
    }

    public function show(Post $task){
    	//$task=Task::find($id);
		//print_r($task);exit;

    return view('tasks.show',compact('task'));
    }
}
