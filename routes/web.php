<?php

use App\Http\Controllers\ProductoController_IG;

Route::get('/', [ProductoController_IG::class, 'index'])->name('productos_ig.index');
Route::get('/productos/{id}', [ProductoController_IG::class, 'show'])->name('productos_ig.show');
