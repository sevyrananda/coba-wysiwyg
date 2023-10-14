<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [GuestbookController::class, 'index'])->name('guestbook');
Route::post('/', [GuestbookController::class, 'store'])->name('guestbook.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
