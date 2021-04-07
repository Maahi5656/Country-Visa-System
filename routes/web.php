<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

use App\Models\Category;

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


 Route::get('/admin', [AdminController::class, 'index']);

 Route::get('/home', [HomeController::class, 'index']);

 // Visa Category
 Route::get('/create-category', [CategoryController::class, 'createCategory']);
 Route::post('/create-category', [CategoryController::class, 'insertCategory'])->name('category.insert');
 
 Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory']);
 Route::post('/edit-category/{id}', [CategoryController::class, 'updateCategory']);

 Route::get('/category',[CategoryController::class, 'viewAllCategory']);

