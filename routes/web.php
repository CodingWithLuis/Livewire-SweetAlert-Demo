<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductForm;
use App\Http\Livewire\ProductList;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products', ProductList::class)->name('products.index');
Route::get('products/create', ProductForm::class)->name('products.create');
