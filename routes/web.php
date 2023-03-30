<?php

use Illuminate\Support\Facades\Route;

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

// ブログ一覧画面を表示
Route::get('/', [App\Http\Controllers\BlogController::class, 'showList'])->name('blogs');

// ブログ登録画面を表示
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'showCreate'])->name('create');

// ブログ登録
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'showCreate'])->name('exestore');

// ブログ一覧詳細画面を表示
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'showDetail'])->name('show');