<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassListAnime;
use Src\Interfaces\InterfaceView;


class ControllerListAnime extends ClassListAnime
{
    protected $ListAnime;
    protected $Anime;
    protected $Episodio;
    protected $Temporada;
    protected $Status;

    public function __construct() 
    {
        $Render= new ClassRender();
        $Render->setTitle("Minha Lista");
        $Render->setDescription("Minha lista de animes");
        $Render->setKeywords("lista, animes");
        $Render->setDir("/listAnime");
        $Render->renderLayout();
    }

    #Recebe as variáveis
    public function recVars()
    {
        if (isset($_POST['Anime'])) {
            $this->Anime=filter_input(INPUT_POST, 'Anime', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    
        if (isset($_POST['Episodio'])) {
            $this->Episodio=filter_input(INPUT_POST, 'Episodio', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    
        if (isset($_POST['Temporada'])) {
            $this->Temporada=filter_input(INPUT_POST, 'Temporada', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    
        if (isset($_POST['Status'])) {
            $this->Status=filter_input(INPUT_POST, 'Status', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    #chama o método de adicionar anime da ClassListAnime
    public function Con_listAnime()
    {
        $this->recVars();
        $model_listAnime = new ClassListAnime();
        $this->ListAnime = $model_listAnime->mod_list();        
    }

    public function view_ListAnime(){
        return $this->ListAnime;
    }

}