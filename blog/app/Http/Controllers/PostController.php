<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)//仮引数にPostと変数$post,インポートしたPostをインスタンス化して$postとして使用できるLaravelの書き方。そういうもの。
    {
        return $post->get();//Postクラスを代入した変数$post(Postモデルのインスタンスともいう。)のgetメソッドを利用して返す。
    }
}

//Postモデルのインスタンスのget()メソッドを利用すると、今Postテーブルに存在するすべてのデータを取得して返却する。
//コントローラーの中でモデルを使用するには、モデルの宣言が必要。これをuse宣言という。(6行目)