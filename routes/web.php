<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('homePage');
Route::get('/detail/{id}', [PageController::class, 'detail'])->name('detailPage');
Route::get('/publishers', [PageController::class, 'publisher'])->name('publishersPage');
Route::get('/publisher/detail/{id}', [PageController::class, 'publisherDetail'])->name('publisherDetail');
Route::get('/publishers/category/{id}', [PageController::class, 'showCategory'])->name('categoryPage');
Route::get('/contact', [PageController::class, 'contact'])->name('contactPage');
Route::get('/result', [PageController::class, 'search'])->name('searchBook');