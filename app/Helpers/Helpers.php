<?php
use App;

function def_path(){
	$url = 'http://suisen-book.com/';
	return (string) $url;
}

function cus_path($str){
	$url = 'http:\\suisen-book.com\\' . $str;
	return (string) $url;
}

function get_env(){
        if (App::environment('local')) {
            $env = "http://localhost:81/pt2";
        } else if(App::environment('production')) {
            $env = "http://suisen-book.com";
        }
        return $env;
}