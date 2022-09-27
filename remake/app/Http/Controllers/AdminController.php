<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index(){
        return view();
    }

    public function Dashboard(){
        return view('admin.index');
    }
    
    // public function Index(){
    //     return view();
    // }
}
