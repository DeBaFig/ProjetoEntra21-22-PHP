<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function building()
    {
        $viewData = [];
        $viewData["title"] = "Em contrução!";
        return view('building.index')->with("viewData", $viewData);
    }

}