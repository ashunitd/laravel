<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


class UserController extends Controller
{

    public function __construct(){
        $this->middleware('guest',['except'=>'logout']);
    }
    public function create(){

    	return view('sessions.create');

    }


    public function login(){


    	return view('sessions.login');

    }

    public function store(){

       
    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required|confirmed'
    		]);

    	$user=User::create([
                'name'=>request('name'),
                'email'=>request('email'),
                'password'=>bcrypt(request('password'))
            ]);
    	
    	auth()->login($user);

    	return redirect('/');
    }

    public function do_login(){
        
        if (!auth()->attempt(['email'=>request('email'),'password'=>request('password')])){
            return back();
        }else{
            return redirect('/');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
