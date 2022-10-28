<?php

use App\Http\Controllers\landingPage\WelcomeController;
use App\Http\Controllers\Transcations\WidthrawalReqController;
use App\Http\Controllers\User\UserAddressController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'landingPage'])->name('welcome');
Route::get('/About-Us',[WelcomeController::class,'aboutUs'])->name('welcome.aboutUs');
Route::get('/Contact-Us',[WelcomeController::class,'contactUs'])->name('welcome.contactUs');

Route::prefix('user')->middleware(['auth','userAuth'])->group(function(){

    Route::get('/',[UserController::class, 'index'])->name('User.index');
    Route::get('/Widthrawal/Approved',[UserController::class, 'approvedTranscation'])->name('User.Transcation.Approved');
    Route::get('/Widthrawal/Rejected',[UserController::class, 'rejectTranscation'])->name('User.Transcation.Rejected');
    // Transcation of Widthrawal Routes
    Route::get('/widthrawal-req',[WidthrawalReqController::class ,'widthrawalReqView'])->name('User.WidthrawalReq.view');
    Route::get('/transcation-details',[WidthrawalReqController::class ,'transcationDetails'])->name('User.Widthrawal.Transcation.Details');
    Route::post('/widthrawal-req/store',[WidthrawalReqController::class ,'storeWidthrawalAmount'])->name('User.Widthrawal.Amount.store');
    // Product Routes
    Route::get('/Product/{id}',[UserProductController::class,'showProduct'])->name('User.Product.Show');

    // User Adress Route
    Route::get('/Add-Address',[UserAddressController::class,'userAddress'])->name('User.Address');
    Route::get('/Address',[UserAddressController::class,'index'])->name('User.Address.index');
    Route::post('/Address/store',[UserAddressController::class,'store'])->name('User.Address.store');

});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
