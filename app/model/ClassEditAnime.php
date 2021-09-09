<?php
namespace App\Model;

use App\Model\ClassConnection;
use Src\Classes\ClassSQLQuery;

class ClassEditAnime extends ClassConnection
{
    private $Db;

    public function mod_dadosAnime($editModal)
    {
      
      $sql = new ClassSQLQuery();
      $sql->clear();
      $txt = "SELECT ID,ANIME,TEMPORADA,EPISODIO,STATUS FROM mylist WHERE ID = :id";
      $sql->addParam('id', $editModal);
      $sql->executeQuery($txt);


      $array[] = [
            
        "ID" => $sql->result('ID'),
        "ANI" => $sql->result('ANIME'),
        "TEMP" => $sql->result('TEMPORADA'),
        "EPI" => $sql->result('EPISODIO'),
        "STA" => $sql->result('STATUS')
      
      ];

      $sql->next();


     
      return $array;
      
    }


    protected function mod_edit($idAnime, $anime, $temporada, $episodio, $status)
    {
      
      $sql = new ClassSQLQuery();
      $sql->clear();
      $txt = "UPDATE mylist SET
      Anime = :anime, Temporada = :temporada ,Episodio = :episodio, Status = :status
      WHERE ID = :id";
      $sql->addParam('id',$idAnime);
      $sql->addParam('anime',$anime);
      $sql->addParam('temporada',$temporada);
      $sql->addParam('episodio',$episodio);
      $sql->addParam('status',$status);
      $sql->executeSQL($txt);

    }
}