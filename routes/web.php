<?php

use App\Http\Controllers\landingPage\WelcomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'landingPage'])->name('welcome');
Route::get('/About-Us',[WelcomeController::class,'aboutUs'])->name('welcome.aboutUs');
Route::get('/Contact-Us',[WelcomeController::class,'contactUs'])->name('welcome.contactUs');

Route::prefix('user')->middleware(['auth','userAuth'])->group(function(){

    Route::get('/',[UserController::class, 'index'])->name('User.index');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
