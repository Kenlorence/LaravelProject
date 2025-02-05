<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;
Route::get('/practice', [PracticeController::class, 'show']);
Route::get('/', function () {
    return view('welcome');
});
