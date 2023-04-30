<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TopController;
use App\Http\Controllers\ItemController;


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
    //先にコントローラを経由するためにリダイレクトさせる
    return redirect('/');

    //return view('top');
});


// Route::get('/top','App\Http\Controllers\TopController@index');  でも可
// /top　へリクエストが来た時の処理をTopController内のindexメソッドで受ける
Route::get('/',[TopController::class,'index']);

// /search　へリクエストが来た時の処理をItemController内のsearchメソッドで受ける
Route::post('/search',[ItemController::class,'search']);



