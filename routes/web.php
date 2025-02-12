<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Usercontroller;

//Route::get('/practice', [PracticeController::class, 'show']);
//route::get('/users', [Usercontroller::class,'index']);

//route::get('/users/{id}',[Usercontroller::class,'show']);
//route::get('/Students',[Studentcontroller::class, 'index']);
// common routes naming 
// index show all data or all students
// show  - display single data or student
// create - Show a form to add a new student/ new user
// store - store a data 
// edit -show form to edit data
//  update - update a data
// destroy - delete a data

Route::get('/', [Studentcontroller::class, 'index']);
route::get('/login', [Usercontroller::class,'create']);