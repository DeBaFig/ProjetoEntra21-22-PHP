<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function home()
  {
    $viewData = [];
    $viewData["title"] = "Login";
    return view('home.login')->with("viewData", $viewData);
  }
}
