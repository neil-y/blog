<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return 'world';
});

Route::get('/hi', [App\Http\Controllers\Front\UserController::class, 'index']);

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
    return $postId . $commentId;
});

Route::get('/messages', 'App\Http\Controllers\Front\MessageController@index');
