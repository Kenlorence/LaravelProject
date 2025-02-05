<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Usercontroller;

//Route::get('/practice', [PracticeController::class, 'show']);
Route::get('/', [Studentcontroller::class, 'index']);

route::get('/users', [Usercontroller::class,'index']);

route::get('/users/{id}',[Usercontroller::class,'show']);

route::get('/Students',[Studentcontroller::class, 'index']);