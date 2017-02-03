<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// モデルの宣言
use App\User;
use App\Book;
use DB;
use Carbon\Carbon;
use Auth;
use Image;
use File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // レコードを検索
        // $user = User::findOrFail($id);
        // 検索結果をビューに渡す
        return view('layouts.user.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // レコードを検索
        $user = User::find($id);
        // 値を代入
        $user->name = $request->name;
        $user->email = $request->email;

        $user->updated_at = Carbon::now();

        // image
        if($request->hasFile('avatar')){

            if($user->avatar != 'default.jpg'){
                $pathToImage = public_path('uploads/avatars/' . $user->avatar);
                File::delete($pathToImage);
            }

            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            // user にて保存が完了してからavatar の保存に移る。
            $user->avatar = $filename;
            $user->save();
            Image::make($avatar)
                ->fit(300, 300, function($constraint){$constraint->upsize();})
                ->save(public_path('uploads/avatars/' . $filename));

        } else {

            $user->save();

        }

        // リダイレクト
        return redirect()->to('/my-page');
    }

    public function myBooks()
    {
        // $books = DB::table('books')->select('id', 'title')->where('user_id', Auth()->id())->get();
        $books = Book::get(['id', 'title'])->where('user_id', Auth()->id());
        return view('layouts.user.books', compact('books'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
