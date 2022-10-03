<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request){

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
