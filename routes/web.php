<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products;
use App\Http\Livewire\Tools;
use App\Http\Livewire\Facebooks;
use App\Http\Livewire\Stripes;


/*


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/products', function () {
    return view('admin.products');
})->name('products');
Route::get('/tools', function () {
    return view('admin.tools');
})->name('tools');;
Route::get('/facebooks', function () {
    return view('admin.facebooks');
})->name('facebooks');;
Route::get('/products', function () {
    return view('admin.products');
})->name('products');;


//Route::get('/facebook', [FacebookController::class, 'facebook']);