<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::post('login', [ApiController::class, 'authenticate']);
Route::get('dash', [ApiController::class, 'dashboard'])->middleware('auth:sanctum');
Route::get('getEspeces', [ApiController::class, 'getEspeces'])->middleware('auth:sanctum');
Route::get('getZones', [ApiController::class, 'getZones'])->middleware('auth:sanctum');
Route::get('getArticles', [ApiController::class, 'getArticles'])->middleware('auth:sanctum');
Route::get('getActualites', [ApiController::class, 'getActualites'])->middleware('auth:sanctum');
Route::get('getMedias', [ApiController::class, 'getMedias'])->middleware('auth:sanctum');
