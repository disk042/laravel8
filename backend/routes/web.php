<?php

use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

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

// Route::get('hello', 'HelloController@index')はLaravel7まで適用可能。8以降は下記の書き方になる。
// Route::get('hello', [HelloController::class, 'index'])

// 下記の書き方でもOK！ただチェーンメソッドの良さがなくなるかも…
//Route::middleware(['hello'])->group(function () {
//    Route::get('hello', [HelloController::class, 'index']);
//    Route::post('hello', [HelloController::class, 'post']);
//});

Route::get('hello', [HelloController::class, 'index']);
Route::post('hello', [HelloController::class, 'post']);
Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);
Route::get('hello/edit', [HelloController::class, 'edit']);
Route::post('hello/edit', [HelloController::class, 'update']);
Route::get('hello/show', [HelloController::class, 'show']);
Route::get('hello/del', [HelloController::class, 'del']);
Route::post('hello/del', [HelloController::class, 'remove']);