<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PakaianController;
use Illuminate\Support\Facades\Auth;
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





Auth::routes();

Route::redirect('/','/beranda');
Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']); // Ini jika Anda ingin menangani proses login


Route::resource('/admin', AdminController::class)->middleware('auth','admin');

Route::resource('/pakaian', PakaianController::class);


Route::get('/pakaian/{id_pakaian}/edit', [PakaianController::class, 'edit'])->name('pakaian.edit');
