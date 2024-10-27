<?php

use App\Http\Controllers\AdminshospiterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\sub_AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Manager route

Route::get('admin/admin_hospyter',[AdminshospiterController::class,'index']);

// SubAdmin Manager route 

Route::get('sub_admin/dashboard',[sub_AdminController::class,'index']);


require __DIR__.'/auth.php';



