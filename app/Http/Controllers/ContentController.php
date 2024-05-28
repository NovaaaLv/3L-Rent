<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function deskripsi(){
        return view('deskripsi');
    }
    public function AboutUs(){
        return view('cardpage');
    }
    public function cartpage(){
        return view('cartpage');
    }
}
