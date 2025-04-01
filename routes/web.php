<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


//Dashboard Routes
Route::get('admin', function(){return view('layouts.admin');})->name('admin');

// Product routes
Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
Route::get('deleteProduct/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

// Category routes
Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

//frontend routes

Route::get('/', [FrontController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

//Login & register routes

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Profile Route (must be logged in)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    // Add other user-specific routes here if needed

Route::post('deleteUser/{id}', [ProfileController::class, 'destroy']);

Route::get('editUser/{id}', [ProfileController::class, 'edit']);

Route::patch('updateUser', [ProfileController::class, 'update'])->name('updateUser');

});

