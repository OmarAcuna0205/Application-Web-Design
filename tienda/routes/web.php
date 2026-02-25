<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
Route::get('/productos/listado', [ProductController::class, 'show'])->name('productos.show');
Route::post('/productos/guardar', [ProductController::class, 'store'])->name('productos.store');