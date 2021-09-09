<?php
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes{

    use TraitUrlParser;

    private $Route;

    #Método de retorno da Rota

    public function getRoute()
    {
        $Url=$this->parseUrl();
        $I=$Url[0];

        $this->Route=array(
            ""=>"ControllerListAnime",
            "listAnime"=>"ControllerListAnime",
            "sitemap"=>"ControllerSitemap",
            "editAnime"=>"ControllerEditAnime",
            "addAnime"=>"ControllerAddAnime",
            "deleteAnime"=>"ControllerDeleteAnime",
            "Json"=>"ControllerJson"
        );

        if(array_key_exists($I,$this->Route)){
            if(file_exists(DIR_REQ."app/controller/{$this->Route[$I]}.php")){
                return $this->Route[$I];
            }else{
                return "ControllerListAnime";
            }
        }else{
            return "Controller404";
        }

    }
}