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

// トップページ
Route::get('/', function () {
    return view('top');
});

// ログインユーザー
Auth::routes();

// 投稿一覧
Route::get('/list', 'PostsController@list');

// 新規投稿
Route::get('/create', 'PostsController@create');
Route::post('/create', 'PostsController@store');

// 投稿削除
Route::delete('/create', 'PostsController@create');

// ランキング
Route::get('/ranking', 'PostsController@ranking');
