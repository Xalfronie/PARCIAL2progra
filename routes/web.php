<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'Index']); 
Route::get('/Form', function(){
    return view('Form');
})->name('Form');