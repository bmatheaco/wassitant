<?php
namespace App\Model;

abstract class ClassConnection
{
    #conecta o sistema ao banco de dados
    public function ConnectionDB()
    {
        try{
            $Con = new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $Con;
        }catch (\PDOException $Error){
            return $Error->getMessage();
        }
    }
    
}