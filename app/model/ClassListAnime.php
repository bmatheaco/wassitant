<?php
namespace App\Model;

use App\Model\ClassConnection;
use Src\Classes\ClassSQLQuery;

class ClassListAnime
{

    protected function mod_list()
     {

       $sql = new ClassSQLQuery();
       $sql->clear();
       $txt = "SELECT ID,ANIME,TEMPORADA,EPISODIO,STATUS FROM mylist";
       $sql->executeQuery($txt);

       while (!$sql->eof()) {

        $array[] = [
          
          "ID" => $sql->result('ID'),
          "ANI" => $sql->result('ANIME'),
          "TEMP" => $sql->result('TEMPORADA'),
          "EPI" => $sql->result('EPISODIO'),
          "STA" => $sql->result('STATUS')
        
        ];
        
         $sql->next();
        }

      
        
        return $array;
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