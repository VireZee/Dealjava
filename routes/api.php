<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\InventoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('inventories/{id}', [InventoryController::class, 'show']);
Route::get('products/{id}', [ProductController::class, 'show']);