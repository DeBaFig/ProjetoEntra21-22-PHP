<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function home()
  {
    $viewData = [];
    $viewData["title"] = "Em contrução!";
    return view('home.login')->with("viewData", $viewData);
  }
}
