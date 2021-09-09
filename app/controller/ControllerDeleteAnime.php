<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassDeleteAnime;


class ControllerDeleteAnime extends ClassDeleteAnime
{

    protected $inputs;

    public function __construct()
    {
        $Render= new ClassRender();
        $Render->setTitle("Deletar Anime");
        $Render->setDescription("Deletar anime da lista");
        $Render->setKeywords("Delete, anime");
        $Render->setDir("/deleteAnime");
        $Render->renderLayout();
    }

    public function arraysPost() {

        $this->inputs = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        $this->inputs = array_map('strip_tags',$this->inputs);
        $this->inputs = array_map('trim',$this->inputs);

    }

    #chama o método de adicionar anime da ClassDeleteAnime
    public function Con_deleteAnime()
    {
        $this->arraysPost();
        $model_deleteAnime = new ClassDeleteAnime();
        $this->DeleteAnime = $model_deleteAnime->mod_delete($_POST['idAnime']);
    }

}