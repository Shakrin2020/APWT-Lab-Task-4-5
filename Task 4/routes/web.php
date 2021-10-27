<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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
//Basic Routes
Route::get('/', [ProductController::class,'home'])->name('home');

//product routes
Route::get('/product/list',[ProductController::class,'list'])->name('products.list'); 
Route::get('/product/details',[ProductController::class,'details'])->name('products.details');
Route::get('/product/edit/{id}/{name}',[ProductController::class,'edit']) ->middleware('ValidAdmin');
Route::post('/product/edit',[ProductController::class,'editSubmit'])->name('products.edit');
Route::get('/product/create',[ProductController::class,'create'])->name('products.create') ->middleware('ValidAdmin');
Route::post('/product/create',[ProductController::class,'createSubmit'])->name('products.create');
Route::get('/product/delete/{id}/{name}',[ProductController::class,'delete']);

//Admin routes

Route::get('/admin/create',[AdminController::class,'create'])->name('admin.create');
Route::post('/admin/create',[AdminController::class,'createSubmit'])->name('admin.create');
Route::get('/admin/list',[AdminController::class,'list'])->name('admin.list');
Route::get('/admin/dash', [AdminController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');

//login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');