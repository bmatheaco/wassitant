<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Controller\ControllerAddAnime;
use App\Model\ClassEditAnime;

class ControllerJson
{
    
    protected $DadosAnime;

    public function __construct()
	{
		$render = new ClassRender();
		$render->setDir("json");
		$render->renderLayoutJson();
	}

    public function arraysPost() {

        $this->inputs = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    }

    public function Con_dadosAnime()
    {

        $this->arraysPost();
        $model_dadosAnime = new ClassEditAnime();
        $this->DadosAnime = $model_dadosAnime->mod_dadosAnime($_GET['idAnime']);
        
    }
    
    public function view_dadosAnime(){
        return $this->DadosAnime;
    }

}