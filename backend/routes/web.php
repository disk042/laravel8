<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\RestappController;
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

Route::get('hello', [HelloController::class, 'index'])->middleware('auth');
Route::post('hello', [HelloController::class, 'post']);
Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);
Route::get('hello/edit', [HelloController::class, 'edit']);
Route::post('hello/edit', [HelloController::class, 'update']);
Route::get('hello/show', [HelloController::class, 'show']);
Route::get('hello/del', [HelloController::class, 'del']);
Route::post('hello/del', [HelloController::class, 'remove']);
Route::get('person', [PersonController::class, 'index']);
Route::get('person/find', [PersonController::class, 'find']);
Route::post('person/find', [PersonController::class, 'search']);
Route::get('person/add', [PersonController::class, 'add']);
Route::post('person/add', [PersonController::class, 'create']);
Route::get('person/edit', [PersonController::class, 'edit']);
Route::post('person/edit', [PersonController::class, 'update']);
Route::get('person/del', [PersonController::class, 'delete']);
Route::post('person/del', [PersonController::class, 'remove']);

Route::get('board', [BoardController::class, 'index']);
Route::get('board/add', [BoardController::class, 'add']);
Route::post('board/add', [BoardController::class, 'create']);
Route::resource('rest', RestappController::class);
Route::get('hello/rest', [HelloController::class, 'rest']);

Route::get('hello/session', [HelloController::class, 'ses_get']);
Route::post('hello/session', [HelloController::class, 'ses_put']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('hello/auth', [HelloController::class, 'getAuth']);
Route::post('hello/auth', [HelloController::class, 'postAuth']);
