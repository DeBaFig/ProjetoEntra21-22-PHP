<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro()
    {
        $viewData = [];
        $viewData["title"] = "Página de Registro";
        return view('cadastro.cadastro')->with("viewData", $viewData);
    }

}
?>