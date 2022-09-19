<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static $itens = [
        ["id_item"=>"1", "id_address" => "", "id_subcategory" => "", "id_item_user"=> "", "title_item" => "Compro Bicicleta Rosa com sininho", "status_item" => 1, "create_at_item"=> "", "negotiate_item"=> 1, "max_price_item" => 1050.35, "min_price_item" => 0.0, "new_item"=> 0 , "quantity_item" => 1, "description_item" => "Eu quero uma bicicleta linda que tenha cestinha e seja rosa!", "reference_link_item" => "https://a-static.mlcdn.com.br/800x560/bicicleta-aro-26-houston-foxer-maori-aco-freio-v-brake-21-marchas/magazineluiza/230945800/9503a4b93103b7bbaf03d334d225aa67.jpg"],
        ["id_item"=>"2", "id_address" => "", "id_subcategory" => "", "id_item_user"=> "", "title_item" => "Compro Bicicleta Rosa com sininho", "status_item" => 1, "create_at_item"=> "", "negotiate_item"=> 1, "max_price_item" => 1050.35, "min_price_item" => 0.0, "new_item"=> 0 , "quantity_item" => 1, "description_item" => "Eu quero uma bicicleta linda que tenha cestinha e seja rosa!", "reference_link_item" => "https://a-static.mlcdn.com.br/800x560/bicicleta-aro-26-houston-foxer-maori-aco-freio-v-brake-21-marchas/magazineluiza/230945800/9503a4b93103b7bbaf03d334d225aa67.jpg"],
    ];

    public function building()
    {
        $viewData = [];
        $viewData["title"] = "Em contrução!";
        return view('building.index')->with("viewData", $viewData);
    }

}
