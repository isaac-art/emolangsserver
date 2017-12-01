<?php

namespace App\Http\Controllers;

use App\Lang;
use App\Test;
use App\Result;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $tasks = Test::get();
        $langs = Lang::get();
        return view('home')->withLangs($langs)->withTasks($tasks);
    }
}
