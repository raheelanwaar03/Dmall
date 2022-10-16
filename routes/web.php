<?php

use App\Http\Controllers\landingPage\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'landingPage'])->name('welcome');
Route::get('/About-Us',[WelcomeController::class,'aboutUs'])->name('welcome.aboutUs');
Route::get('/Contact-Us',[WelcomeController::class,'contactUs'])->name('welcome.contactUs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
