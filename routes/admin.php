<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductMangerController;
use App\Http\Controllers\Admin\Transcation\LimitController;
use App\Http\Controllers\Admin\Transcation\TranscationDetails;
use Illuminate\Support\Facades\Route;

Route::prefix('Admin')->middleware(['auth','adminAuth'])->group(function(){

    Route::get('/',[AdminController::class, 'index'])->name('Admin.index');
    Route::get('/all-Users',[AdminController::class, 'allUsers'])->name('Admin.allUsers');
    Route::get('/User/register-user',[AdminController::class, 'registeredUser'])->name('Admin.AllRegistered.User');
    Route::get('/User/register/{id}',[AdminController::class, 'registerId'])->name('Admin.Register.User');
    Route::get('/User/banned-user',[AdminController::class, 'bannedUser'])->name('Admin.AllBanned.User');
    Route::get('/User/ban/{id}',[AdminController::class, 'userBan'])->name('Admin.Ban.User');
    // Admin Transcation detail Routes
    Route::get('/widthrawal-req',[TranscationDetails::class,'userWidthrawalReq'])->name('Admin.Widthrawal.User.Request');
    Route::get('/approved-user-req/{id}',[TranscationDetails::class,'approvedReq'])->name('Admin.Make.Request.Approve');
    Route::get('/reject-user-req/{id}',[TranscationDetails::class,'rejectReq'])->name('Admin.Make.Request.Reject');
    Route::get('/user-approved-transctions',[TranscationDetails::class,'approvedTransction'])->name('Admin.User.Transcation.Approved');
    Route::get('/user-pending-transctions',[TranscationDetails::class,'pendingTransction'])->name('Admin.User.Transcation.Pending');
    Route::get('/user-reject-transctions',[TranscationDetails::class,'rejectTransction'])->name('Admin.User.Transcation.Rejected');
    //Limit Routes
    Route::resource('/Limit',LimitController::class);
    //Admin Product Manger Routes
    Route::resource('/Product',ProductMangerController::class);
    // Admin catagory Routes
    Route::resource('/Catagory',CatagoryController::class);
    // Order Routes

    Route::get('/User/Orders',[OrderController::class,'index'])->name('Admin.User.Order');
    Route::get('/User/Orders/{id}',[OrderController::class,'status'])->name('Admin.User.Order.Delivered');

});
