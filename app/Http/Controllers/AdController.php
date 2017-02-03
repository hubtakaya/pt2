<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (App::environment('local')) {
            $env = "http://localhost:81/pt2";
        } else {
            $env = "http://suisen-book";
        }
        return view('advertize.index')->with('env', $env);
    }

}
