<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        return view('home.index');
    }
    public function about()
    {
        $viewData = [];
        $viewData['info'] =
            [
                "denize" => ['name' => "Denize Bassi Figueiredo", 'city' => "Joinville - SC", 'img' => "denize.jpg", 'desc' => "Desde jovem sou atraída por tecnologia, minhas primeiras linhas de código foram em VisualBasic, hoje mais madura, acumulando uma variedade de cursos, mas também uma desenvoltura profissional focada em auto-desenvolvimento e compartilhamento de conhecimentos. Minha motivação é zelar por minha família e constantemente aprender algo novo.", 'link' => "https://github.com/DeBaFig/"],
                "Icaro" => ['name' => "", 'city' => "", 'img' => "icaro.jpg", 'desc' => "", 'link' => ""],
                "Bruno" => ['name' => "Bruno de Souza", 'city' => "Penha - SC", 'img' => "bruno.jpg", 'desc' => "Nascido em Belo Horizonte (MG) há 18 anos. Interesse por informática e programação desde muito tempo, e trabalhando na área de hardware há quase dois anos. Participar do Entra21 me despertou mais vontade de aprender e progredir na área! Atualamente também cursando superior de Análise e Desenvolvimento de Sistemas.", 'link' => "https://github.com/brwnosouza"],
                "Paula" => ['name' => "", 'city' => "", 'img' => "paula.jpg", 'desc' => "", 'link' => ""],
                "Jennifer" => ['name' => "", 'city' => "", 'img' => "jennifer.jpg", 'desc' => "", 'link' => ""],
                "Lucas" => ['name' => "Lucas Bernardelli dos Passos", 'city' => "Balneário Camboriú", 'img' => "lucas.jpg", 'desc' => "Acadêmico de Engenharia de Software e estudante de desenvolvimento web. Na trilha da construção do conhecimento necessário para contribuir para a sociedade de maneira mais produtiva, criativa e ágil. Buscando desenvolver de maneira sólida as habilidades para a construção de uma carreira. Excelente comunicador, buscador de conhecimento e apaixonado por tecnologia.", 'link' => "https://github.com/PassosLucasB"],
                "Adriano" => ['name' => "", 'city' => "", 'img' => "adriano.jpg", 'desc' => "", 'link' => ""]
            ];

        return view('home.about')->with("viewData", $viewData);
    }
    public function aboutBalcao()
    {
        return view('home.aboutBalcaoBrasil');
    }
    public function contact()
    {
        return view('home.contact');
    }
}