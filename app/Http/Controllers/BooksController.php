<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// モデルの宣言
use App\Book;

class BooksController extends Controller
{
    // 一覧
    public function index() {

    	// Books テーブルのデータをすべて取得する
    	$books = Book::all();
    	return view('index', compact('books'))
        ->with(['nav' => 'top_nav',
                'headerFalse' => 'true']);
    }

    // 表示
    public function show($id) {

    	// Books テーブルのデータをすべて取得する
    	$book = Book::findOrFail($id);
    	return view('books.show', compact('book'))
    		->with(['pageTitle' => '『' . $book->title . '』',
                'pageLabel' => $book->title]);
    }

    // 追加
    public function add() {

    	return view('books.add')
    		->with(['pageTitle' => 'Adding Books', 'pageLabel' => 'Books 追加']);
    }

    public function create($user_id, Request $request) {

    	$this->validate($request, [
            'user_id' => 'required',
    		'title' => 'required',
    		'intro' => 'required',
    		// pic も必須項目にしたい。
    		'pic'   => 'required|image|max:2000',
    	]);

    	// 新規データ1件登録
    	Book::create($request->all());

    	// 一覧画面へリダイレクト
    	\Session::flash('flash_message', 'Book successfully added!');
    	return redirect('/');
    }


    // 編集
    public function edit($id) {
    	// $id に該当するデータ1件取得する
    	$book = Book::findOrFail($id);
    	return view('books.edit', compact('book'))
    		->with(['pageTitle' => 'Editting Books', 'pageLabel' => 'Books 編集']);
    }

    public function update($id, Request $request) {

    	// $id に該当するデータ1件を取得する
    	$book = Book::findOrFail($id);

    	$this->validate($request, [
    		'title' => 'required',
    		'intro' => 'required',
    		'pic'   => 'image|max:2000',
		]);

    	// 既存データ1件更新
		$book->fill($request->all())->save();

		// 一覧画面へリダイレクト
		\Session::flash('flash_message', 'Book successfully edited!');
		return redirect('/');
    }

    // 削除
    public function delete(Request $request) {

    	// 削除対象のid を選択する。
    	$target_id = $request->id;

    	if ($target_id && is_numeric($target_id)) {

    		// 既存データ1件削除
    		$book = Book::findOrFail($target_id);
    		$book->delete();

    		\Session::flash('flash_message', 'Book successfully deleted!');

    	} else {

    		// 削除成功時のメッセージを表示
    		\Session::flash('flash_message',
    		 'Book delete failed! Because something went wrong.');
    	}

    	// 一覧画面へリダイレクト
    	return redirect('/');
    }
}
