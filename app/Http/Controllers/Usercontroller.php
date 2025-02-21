<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        return 'hello from user';
    }
    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        }else abort(404);
       
    }
    public function register(){
            return view('user.register');

    }

    public function show($id){
       
            return view('user')
                ->with('name', 'Ken Lorence')
                ->with('Age', 21)
                ->with('email', 'kmgara2022@gmail.com')
                ->with('id', $id);
        
        
    }
}
