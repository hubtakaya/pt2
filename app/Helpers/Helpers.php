<?php

function def_path(){
	$url = 'http://suisen-book.com/';
	return (string) $url;
}

function cus_path($str){
	$url = 'http:\\suisen-book.com\\' . $str;
	return (string) $url;
}

function get_env(){
        if (\App::environment('local')) {
            $env = "http://localhost:8000";
        }  else if(App::environment('production')) {
            $env = "http://suisen-book.com";
        }
        return $env;
}

/*
 * プロフィール画面を取得する。
 * 
 * 
 * 
 */

function get_MyAvatar(){

    // get() だと複数レコードを取得しようとするのでアウト！
    $userData = DB::table('users')->select('avatar', 'password')->where('id', Auth()->id())->first();

    $isSocial = empty($userData->password);

    // ソーシャルログイン中の時
    if($isSocial == true)
    {
        $avatar = $userData->avatar;
    }
    // ソーシャルログインでない時
    else
    {
        $avatar = get_env() . "/uploads/avatars/" . $userData->avatar;
    }

    return (string) $avatar;
}