<?php
namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{

    #Atributos
    private $Method;
    private $Param=[];
    private $Obj;

    protected function getMethod()
    {
        return $this->Method;
    }

    public function setMethod($Method)
    {
        $this->Method = $Method;
    }

    protected function getParam()
    {
        return $this->Param;
    }

    public function setParam($Param)
    {
        $this->Param = $Param;
    }

    #Método Contrutor
    public function __construct() 
    {
        self::addController();
    }

    #Método de Adição do Controller

    private function addController()
    {
        $RouteController=$this->getRoute();
        $NameS="App\\Controller\\{$RouteController}";
        $this->Obj=new $NameS;

        if(isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }

    #Método de Adição de Método do Controller

    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl()[1])){
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj,$this->getMethod()],$this->getParam());
        }
    }

    #Método de Adição de Parâmetros do Controller

    private function addParam()
    {
        
        $CountArray=count($this->parseUrl());

        if ($CountArray > 2) {
            foreach ($this->parseUrl() as $Key => $Value) {
                if ($Key > 1) {
                    $this->setParam($this->Param += [$Key => $Value]);
                }
            }
        }

    }

}