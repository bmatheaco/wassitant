<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassAddAnime;

class ControllerAddAnime extends ClassAddAnime
{
    protected $Anime;
    protected $Temporada;
    protected $Episodio;
    protected $Status;

    public function __construct()
    {
        $Render= new ClassRender();
        $Render->setTitle("Adicionar Anime");
        $Render->setDescription("Adicionar animes na lista");
        $Render->setKeywords("adicionar, animes");
        $Render->setDir("/addAnime");
        $Render->renderLayout();
    }

    #Recebe as variáveis
    public function recVars()
    {
        if (isset($_POST['Anime'])) {
            $this->Anime=filter_input(INPUT_POST, 'Anime', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    
        if (isset($_POST['Temporada'])) {
            $this->Temporada=filter_input(INPUT_POST, 'Temporada', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    
        if (isset($_POST['Episodio'])) {
            $this->Episodio=filter_input(INPUT_POST, 'Episodio', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    
        if (isset($_POST['Status'])) {
            $this->Status=filter_input(INPUT_POST, 'Status', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    #chama o método de adicionar anime da ClassAddAnime
    public function add()
    {

        $this->recVars();
        $this->addAnimes($this->Anime, $this->Temporada, $this->Episodio, $this->Status);
        echo "Anime Adicionado com Sucessoo total.";

    }

}
