<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PostController::class,"index"])->name("Posts.index");
Route::get('/create',[PostController::class,"create"])->name("Posts.create");
Route::post('/',[PostController::class,"store"])->name("Posts.store");
Route::get('/edit/{Post}',[PostController::class,"edit"])->name("Posts.edit");
Route::put('/{Post}',[PostController::class,"update"])->name("Posts.update");
Route::get('/show/{Post}',[PostController::class,"show"])->name("Posts.show");
Route::delete('/{Post}',[PostController::class,"destroy"])->name("Posts.destroy");
