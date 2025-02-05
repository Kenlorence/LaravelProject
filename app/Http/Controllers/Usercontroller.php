<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        return 'hello from user';
    }

    public function show($id){
       
            return view('user')
                ->with('name', 'Ken Lorence')
                ->with('Age', 21)
                ->with('email', 'kmgara2022@gmail.com')
                ->with('id', $id);
        
        
    }
}
