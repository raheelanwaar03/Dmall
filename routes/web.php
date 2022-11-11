<?php

use App\Http\Controllers\landingPage\WelcomeController;
use App\Http\Controllers\Transcations\WidthrawalReqController;
use App\Http\Controllers\User\AddToCartController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\UserAddressController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'landingPage'])->name('welcome');
Route::get('/Products',[WelcomeController::class,'index'])->name('welcome.Products');
Route::get('/About-Us',[WelcomeController::class,'aboutUs'])->name('welcome.aboutUs');
Route::get('/Contact-Us',[WelcomeController::class,'contactUs'])->name('welcome.contactUs');

// search Product
Route::get('/search/product',[WelcomeController::class,'search'])->name('searchProcuct');

Route::prefix('user')->middleware(['auth','userAuth'])->group(function(){

    Route::get('/',[UserController::class, 'index'])->name('User.index');
    Route::get('/Refer',[UserController::class, 'refer'])->name('User.Refer');
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
    Route::get('/Address/Edit/{id}',[UserAddressController::class,'edit'])->name('User.Address.Edit');
    Route::post('/Address/updating/{id}',[UserAddressController::class,'update'])->name('User.Address.update');
    Route::post('/Address/store',[UserAddressController::class,'store'])->name('User.Address.store');

    // Add to Cart Routes

    Route::get('Cart/Products',[AddToCartController::class,'index'])->name('User.AddToCart');
    Route::post('Add-To-Cart/{id}',[AddToCartController::class,'store'])->name('User.AddToCart.store');
    Route::get('Cart/Product/delete/{id}',[AddToCartController::class,'destroy'])->name('User.AddToCart.destroy');
    Route::post('Cart/Product/update/{id}',[AddToCartController::class,'update'])->name('User.AddToCart.update');

    // Order Product
    Route::get('/Order',[OrderController::class,'index'])->name('User.Order.Index');
    Route::get('/Order/compeleted',[OrderController::class,'compeleted'])->name('User.Order.compeleted');
    Route::post('/Order/store',[OrderController::class,'store'])->name('User.Order.Store');

});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
