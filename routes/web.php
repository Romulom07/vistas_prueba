<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\MarcaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tabla', function () {
    return view('tabla');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/categories',[CategoryController::class,'index'])->name('categories');

Route::get('/subcategories',[SubCategoryController::class,'index'])->name('sub_categories'); 

Route::get('/Marca',[MarcaController::class,'index'])->name('marcas'); 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
