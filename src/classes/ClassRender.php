<?php
namespace Src\Classes;

class ClassRender
{

    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    protected function getDir()
    {
        return $this->Dir;
    }

    public function setDir($Dir)
    {
        $this->Dir = $Dir;
    }

    protected function getTitle()
    {
        return $this->Title;
    }

    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    protected function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    protected function getKeywords()
    {
        return $this->Keywords;
    }

    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
    }

    #Renderizar Layout
    public function renderLayout()
    {

        include_once(DIR_REQ."app/view/Layout.php");

    }

     #Adicionar caracteristicas específicas no Head
     public function addHead()
     {
         
        if(file_exists(DIR_REQ."app/view/{$this->getDir()}/Head.php")){
            include(DIR_REQ."app/view/{$this->getDir()}/Head.php");
        }
 
     }

    #Adicionar caracteristicas específicas no Header
    public function addHeader()
    {
        
        if(file_exists(DIR_REQ."app/view/{$this->getDir()}/Header.php")){
            include(DIR_REQ."app/view/{$this->getDir()}/Header.php");
        }

    }

    #Adicionar caracteristicas específicas no Main
    public function addMain()
    {
        
        if(file_exists(DIR_REQ."app/view/{$this->getDir()}/Main.php")){
            include(DIR_REQ."app/view/{$this->getDir()}/Main.php");
        }

    }

    #Adicionar caracteristicas específicas no Footer
    public function addFooter()
    {
        
        if(file_exists(DIR_REQ."app/view/{$this->getDir()}/Footer.php")){
            include(DIR_REQ."app/view/{$this->getDir()}/Footer.php");
        }

    }
    
    public function renderLayoutJson()
    {

        include_once(DIR_REQ."app/view/LayoutJson.php");

    }


    #Adicionar caracteristicas específicas no Json Main
    public function addJsonMain()
    {
        
        if(file_exists(DIR_REQ."app/view/{$this->getDir()}/Main.php")){
            include(DIR_REQ."app/view/{$this->getDir()}/Main.php");
        }

    }
    
}