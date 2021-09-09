<?php
namespace App\Model;

use App\Model\ClassConnection;
use Src\Classes\ClassSQLQuery;

class ClassDeleteAnime
{

    protected function mod_delete($inputs)
     {
      
      $sql = new ClassSQLQuery();
      $sql->clear();
      $txt = "DELETE FROM mylist WHERE ID = '".$inputs."'";
      $sql->executeSQL($txt);
      
     }

    //  protected function searchList($anime, $temporada, $episodio, $status)
    //  {

    //    $sql = new ClassSQLQuery();
    //    $sql->clear();
    //    $txt = "SELECT * FROM 'mylist' where Anime like '%:anime%'";
    //    $sql->addParam('anime',$anime);
    //    $sql->addParam('temporada',$temporada);
    //    $sql->addParam('episodio',$episodio);
    //    $sql->addParam('status',$status);
    //    $sql->executeQuery($txt);

    //  }

}