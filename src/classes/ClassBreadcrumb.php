<?php 
namespace Src\Classes;

class ClassBreadcrumb
{
    use \Src\traits\TraitUrlParser;

    #cria os breadcrumbs
    public function addBreadcrumb()
    {

        $Count=count($this->parseUrl());

        $ArrayLink[0]='';

        for($I=0; $I < $Count; $I++){

            $ArrayLink[0].=$this->parseUrl()[$I].'/';
            echo "<li class='breadcrumb-item'> <a href=".DIR_PAGE.$ArrayLink[0].">".$this->parseUrl()[$I]."</a></li>";

            // if($I < $Count - 1){
            //     echo " > ";
            // }
        }
    }
}