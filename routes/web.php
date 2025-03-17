<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrotnController;


//Dashboard Routes
Route::get('admin', function(){
    return view('layouts.admin');
});

// Product routes
Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products.index'); // Named index route
Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create'); // Named create route
Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store'); // Named store route
Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit'); // Named edit route
Route::put('admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update'); // Named update route
Route::get('deleteProduct/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy'); // Named destroy route

// Category routes
Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index'); // Named index route
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create'); // Named create route
Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store'); // Named store route
Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit'); // Named edit route
Route::put('admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update'); // Named update route
Route::delete('admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy'); // Named destroy route

//frontend routes

Route::get('/', [FrotnController::class, 'index']);