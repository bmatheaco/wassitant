<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Controller\ControllerAddAnime;
use App\Model\ClassEditAnime;

class ControllerEditAnime extends ClassEditAnime
{
    protected $Anime;
    protected $Episodio;
    protected $Temporada;
    protected $Status;
    
    public function __construct() 
    {
        // $Url=$this->parseUrl();
        // $Url[1]="editAnime";
        $Render= new ClassRender();
        $Render->setTitle("Editar Anime");
        $Render->setDescription("Editar anime da lista");
        $Render->setKeywords("Editar, anime");
        $Render->setDir("editAnime");
        $Render->renderLayout();
   
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

    public function Con_editAnime()
    {

        $this->arraysPost();
        $model_editAnime = new ClassEditAnime();
        $this->DeleteAnime = $model_editAnime->mod_edit($_POST['idAnime'], $_POST['anime'], $_POST['temporada'], $_POST['episodio'], $_POST['status']);

    }

}