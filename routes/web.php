<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NavController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('services', ServiceController::class);
Route::resource('nav', NavController::class);
Route::get('contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('contact', [ContactController::class, 'sendEmail'])->name('contact.send');
