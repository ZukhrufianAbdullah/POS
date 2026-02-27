<?php

// Jobsheet 3
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

// Jobsheet 2
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SalesController;

// Jobsheet 3
Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

// Jobsheet 2
/* ======================
   HOME
====================== */
// Route::get('/', [HomeController::class, 'index']);


/* ======================
   PRODUCTS (Prefix)
====================== */
// Route::prefix('category')->group(function () {

//     Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductController::class, 'homeCare']);
//     Route::get('/baby-kid', [ProductController::class, 'babyKid']);

// });


// /* ======================
//    USER (Route Parameter)
// ====================== */
// Route::get('/user/{id}/name/{name}', 
//     [UserController::class, 'profile']
// );


// /* ======================
//    SALES
// ====================== */
// Route::get('/sales', [SalesController::class, 'index']);
