<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\FauneController;
use App\Http\Controllers\FloreController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\AlerteController;
use App\Http\Controllers\EspeceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EcosystemeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/carte', [CarteController::class, 'index'])->name('carte');
Route::get('/presentation', [CarteController::class, 'presentation'])->name('presentation');
Route::get('/articlelist', [CarteController::class, 'articleList'])->name('articlelist');
Route::get('/ressourcelist', [CarteController::class, 'ressourceList'])->name('ressourcelist');
Route::get('/contact', [CarteController::class, 'contact'])->name('contact');
Route::get('/alertefront', [AlerteController::class, 'alerteFront'])->name('alertefront');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('user', UserController::class);
    Route::resource('new', NewsController::class);
    Route::resource('ecosysteme', EcosystemeController::class);
    Route::resource('espece', EspeceController::class);
    Route::resource('flore', FloreController::class);
    Route::resource('faune', FauneController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('media', MediaController::class);
    Route::resource('alerte', AlerteController::class);
    Route::get('/genapi', [ApiController::class, 'index'])->name('generate');
});

require __DIR__.'/auth.php';
