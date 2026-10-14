<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyyController;
use App\Http\Controllers\AuthController;


$idRegex =  '[0-9]+';
$slugRegex =  '[0-9a-z\-]+';
Route::get('/',  [HomeController::class, 'index'])->name('property.acc');
Route::get('/biens',  [PropertyyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}',  [PropertyyController::class, 'show'])->name('property.show')->where([
    'property'=> $idRegex,
    'slug'=> $slugRegex
]);
Route::post('/biens/{property}/contact',  [PropertyyController::class, 'contact'])->name('property.contact')->where([
    'property'=> $idRegex,
    
]);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
Route::resource('/property', PropertyController::Class)->except(['show']);
Route::resource('/option', OptionController::Class)->except(['show']);
});
