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
            $env = "http://localhost:81/pt2/advertize_design";
        } else {
            $env = "http://suisen-book.com/advertize_design";
        }
        return $env;
}