<?php

use App\Http\Controllers\AcaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CollectionController::class, 'index']);
Route::get('/{collection}', [CollectionController::class, 'show'])->name('collections.show');
// Acara routes (with 'acara' prefix)
