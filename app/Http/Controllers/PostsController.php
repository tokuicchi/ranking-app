<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // 投稿一覧を表示する
    public function list()
    {
        // TODO: ビューをreturnしているだけ
        return view('posts.list');
    }

    // 新規投稿ページを表示をする
    public function create()
    {
        // TODO: ビューをreturnしているだけ
        return view('posts.create');
    }

    // 新規投稿を登録をする
    public function store()
    {

    }

    // 画像を保存する
    public function upload()
    {
        // 難しいから後回し
    }

    // 月間ランキングを表示する
    public function ranking()
    {
        // TODO: ビューをreturnしているだけ
        return view('posts.ranking');
    }

    // 投稿を削除する
    public function delete()
    {

    }
}
