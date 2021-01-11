<?php

// 使用するコントローラーやモデルのパスを入力
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
use App\Models\Post;

/*
 * --------------------------------------------------------------------------
 * Web Routes
 * --------------------------------------------------------------------------
 *
 * Laravel 8以降では、ルーティングの使用が変更されている
 * 1. 上部にコントローラーのパスを入力すること
 * 2. Route::get('パス', [コントローラー名::class, 'コントローラー内の関数名']); という表記に従うこと
 *  * getの部分はpostなどに変更してもよい
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hello', function(){
  return 'こんにちは';
});

// Route::get('/test', [TestsController::class, 'test']);

Route::get('/test', function(){
  $posts = Post::all();
  foreach($posts as $post){
    return $post->title;
  }
});