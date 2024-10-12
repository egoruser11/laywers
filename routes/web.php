<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index'])->name('main');//->middleware('auth');
Route::post('/',[MainController::class,'store'])->name('main.store.application');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Auth::routes(['register' => false, 'reset' => false, 'verify' => false, 'confirm' => false]);
