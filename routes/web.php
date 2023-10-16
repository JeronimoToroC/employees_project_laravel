<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/employee');
Route::resource('employee', EmployeeController::class);;


Route::get('/home', [HomeController::class, 'index'])->name('home');
