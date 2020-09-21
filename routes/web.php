<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us', [AboutController::class, 'show'])->name('about');
Route::get('news', [NewsItemController::class, 'index'])->name('news');
Route::get('news/create', [NewsItemController::class, 'create'])->name('news.create');
Route::post('news/store', [NewsItemController::class, 'store'])->name('news.store');
Route::get('news/{id}', [NewsItemController::class, 'show'])->name('news.show');
