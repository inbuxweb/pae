<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Auth;
use App\Livewire\Admin\Home;

use App\Livewire\Admin\Plate\ListIngredients;
use App\Livewire\Admin\Plate\CreateIngredient;
use App\Livewire\Admin\Inventory\CreateProvider;
use App\Livewire\Admin\Inventory\ListProvider;
use App\Livewire\Admin\Inventory\ListPurchases;
use App\Livewire\Admin\Inventory\CreatePurchases;
use App\Livewire\Admin\Plate\ListPlate;
use App\Livewire\Admin\Plate\CreatePlate;
use App\Livewire\Admin\School\ListSchool;
use App\Livewire\Admin\School\CreateSchool;
use App\Livewire\Admin\Planning\ListPlanning;
use App\Livewire\Admin\Users\ListUsers;
use App\Livewire\Admin\Analytics\Inspeccion;

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
Route::get('admin/login', Auth::class)->name('login');
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('home', Home::class)->name('home');

    // Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    // Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    
    //Ingredient
    Route::get('plate/ingredients', ListIngredients::class)->name('ingredients');
    Route::get('plate/ingredient/create', CreateIngredient::class)->name('ingredient.create');
    //Providers
    Route::get('inventory/providers', ListProvider::class)->name('providers');
    Route::get('inventory/provider/create', CreateProvider::class)->name('provider.create');
    //Purchases
    Route::get('inventory', ListPurchases::class)->name('inventory');
    Route::get('inventory/purchases/create', CreatePurchases::class)->name('purchases.create');

    //Plates
    Route::get('plates', ListPlate::class)->name('plates');
    Route::get('plates/create', CreatePlate::class)->name('plates.create');
    
    //Plates
    Route::get('schools', ListSchool::class)->name('schools');
    Route::get('school/create', CreateSchool::class)->name('school.create');

     //Planning
     Route::get('planning', ListPlanning::class)->name('planning');
    //  Route::get('planning/create', CreateSchool::class)->name('school.create');
    Route::get('users', ListUsers::class)->name('users');

    //Analytics
    Route::get('inspeccion', Inspeccion::class)->name('inspeccion');
});
