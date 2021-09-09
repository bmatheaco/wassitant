<?php
namespace App\Model;

use App\Model\ClassConnection;
use Src\Classes\ClassSQLQuery;

class ClassAddAnime extends ClassConnection
{
    private $Db;

    #cria os animes na lista
    // protected function addAnimes($anime, $temporada, $episodio, $status)
    // {
    //     var_dump($anime, $temporada, $episodio, $status);
    //     $this->Db=$this->ConnectionDB()->prepare("INSERT INTO mylist ( Anime, Temporada, Episodio, Status ) values(:id, :anime, :temporada, :episodio, :status");
    //     $this->Db->bindParam(":id", $id, \PDO::PARAM_INT);
    //     $this->Db->bindParam(":anime", $anime, \PDO::PARAM_STR);
    //     $this->Db->bindParam(":temporada", $temporada, \PDO::PARAM_INT);
    //     $this->Db->bindParam(":episodio", $episodio, \PDO::PARAM_INT);
    //     $this->Db->bindParam(":b", $status, \PDO::PARAM_STR);
    //     $this->Db->execute();
    //     var_dump($anime, $temporada, $episodio, $status);


    // }

    protected function addAnimes($anime, $temporada, $episodio, $status)
    {

      $sql = new ClassSQLQuery();
      $sql->clear();
      $txt = "INSERT INTO mylist
      ( Anime, Temporada, Episodio, Status )
      values (:anime, :temporada, :episodio, :status)";
      $sql->addParam('anime',$anime);
      $sql->addParam('temporada',$temporada);
      $sql->addParam('episodio',$episodio);
      $sql->addParam('status',$status);
      $sql->executeSQL($txt);

    }
}