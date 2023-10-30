<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/information',[PagesController::class,'info'])->name('info');
Route::get('/staff',[PagesController::class,'staff'])->name('staff');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
