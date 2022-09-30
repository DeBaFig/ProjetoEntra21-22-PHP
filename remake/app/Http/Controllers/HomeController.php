<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function about(){
        return view('home.about');
    }
    public function aboutBalcao(){
        return view('home.aboutBalcaoBrasil');
    }
    public function contact(){
        return view('home.contact');
    }
}
