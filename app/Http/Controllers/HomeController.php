<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('landingpage');
    }

    public function homepage()
    {
        return view('homepage');
    }
    public function detail()
    {
        return view('detail');
    }
    public function test()
    {
        return view('test');
    }
}
