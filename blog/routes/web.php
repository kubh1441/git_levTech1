<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/posts',[PostController::class, 'index']);
//これは/postsというURIにgetメソッドで注文が来たらPostControllerのindexというメソッドを実行する仕組みになっている。
//コントローラーでモデルのuse宣言を書いたように、web.phpでもuse宣言を書く必要がある。