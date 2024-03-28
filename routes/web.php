<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Auth;
use App\Livewire\Admin\Home;

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
/*Auth*/
Route::get('login', Auth::class)->name('login');
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('home', Home::class)->name('home');

    // Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    // Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
