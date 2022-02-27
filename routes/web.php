<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student', [StudentController::class, 'create'])->name('new-student');
Route::get('/manage-student', [StudentController::class, 'manage'])->name('manage-student');
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('update-student');
Route::get('/delete-student/{id}', [StudentController::class, 'delete'])->name('delete-student');
Route::post('/delete-student/{id}', [StudentController::class, 'delete'])->name('delete-student');

Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('new-blog');
Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');
Route::get('/edit-manage/{id}', [BlogController::class, 'edit'])->name('edit-blog');

Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
Route::post('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
Route::get('/manage-product', [ProductController::class, 'manage'])->name('edit-product');
Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('manage-product');
Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');
Route::post('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');
