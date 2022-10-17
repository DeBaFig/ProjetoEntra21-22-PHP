<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = Photo::select('products.title', 'photos.photo_image' ,'products.isNew' , 'products.max_price', 'products.isNegotiable')
            ->join('products', 'photos.id', '=', 'products.id')
            ->where('isActive', '=', 1)
            ->orderBy('publish_at')
            ->paginate(6);
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData['info'] =
            [
                "denize" => ['name' => "Denize Bassi Figueiredo", 'city' => "Joinville - SC", 'img' => "denize.jpg", 'desc' => "Desde jovem sou atraída por tecnologia, minhas primeiras linhas de código foram em VisualBasic, hoje mais madura, acumulando uma variedade de cursos, mas também uma desenvoltura profissional focada em auto-desenvolvimento e compartilhamento de conhecimentos. Minha motivação é zelar por minha família e constantemente aprender algo novo.", 'link' => "https://github.com/DeBaFig/"],
                "Icaro" => ['name' => "", 'city' => "", 'img' => "icaro.jpg", 'desc' => "", 'link' => ""],
                "Bruno" => ['name' => "Bruno de Souza", 'city' => "Penha - SC", 'img' => "bruno.jpg", 'desc' => "Nascido em Belo Horizonte (MG) há 18 anos. Interesse por informática e programação desde muito tempo, e trabalhando na área de hardware há quase dois anos. Participar do Entra21 me despertou mais vontade de aprender e progredir na área! Atualamente também cursando superior de Análise e Desenvolvimento de Sistemas.", 'link' => "https://github.com/brwnosouza"],
                "Paula" => ['name' => "Paula Eduarda Silva", 'city' => 'Xanxerê - SC', 'img' => "paula.jpg", 'desc' => "Em 2022 tomei a decisão de realizar minha transição de carreira, migrando da área de saúde para a área de TI. Durante este período encontrei o Entra21, que foi essencial para esta mudança! Atualmente curso Análise e Desenvolvimento de Sistemas e no meu tempo livre gosto de ler e jogar.", 'link' => "https://github.com/PaulaKinder"],
                "Jennifer" => ['name' => "Jennifer Barbosa", 'city' => "Brusque - SC", 'img' => "jennifer.jpg", 'desc' => "A paixão pela programação foi instantânea desde o primeiro curso que tive contato e o desejo de me aperfeiçoar cada vez mais se mantém sempre mais forte. Tenho um longo caminho pela frente de aprendizado e esforço, mas com determinação, estudos e coragem me preparo e me qualifico diariamente.", 'link' => "https://github.com/jennibarbosa"],
                "Lucas" => ['name' => "Lucas Bernardelli dos Passos", 'city' => "Balneário Camboriú", 'img' => "lucas.jpg", 'desc' => "Acadêmico de Engenharia de Software e estudante de desenvolvimento web. Na trilha da construção do conhecimento necessário para contribuir para a sociedade de maneira mais produtiva, criativa e ágil. Buscando desenvolver de maneira sólida as habilidades para a construção de uma carreira. Excelente comunicador, buscador de conhecimento e apaixonado por tecnologia.", 'link' => "https://github.com/PassosLucasB"],
                "Adriano" => ['name' => "Instrutor - Adriano Machado", 'city' => "Guaratuba - Paraná", 'img' => "adriano.jpg", 'desc' => "Gestor de Tecnologia da Informação. Analista de Infraestrutura Linux. Programador PHP. DBA MySQL. Programador Shell Script, Python. Experiência em RaspBerry, Fedora, Ubuntu, Centos, RedHat e outros. Redes TCP/IP, Modbus, CAN. Experiência Gestão de projetos.", 'link' => "https://github.com/Machado-tec"]
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