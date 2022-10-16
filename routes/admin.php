<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('Admin')->middleware(['auth','adminAuth'])->group(function(){

    Route::get('/',[AdminController::class, 'index'])->name('Admin.index');

});
