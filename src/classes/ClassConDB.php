<?php
  
  namespace Src\Classes;
  
  use PDO;
  
  class ClassConDB {
    
    public static  $Host   = HOST;
    public static  $User   = USER;
    public static  $Pass   = PASS;
    public static  $DBname = DB;
    public static  $Port   = PORT;
    private static $Conn   = NULL;
    
    public function getConn() {
      return self::Conectar();
    }
    
    public function closeConn() {
      return self::Conectar(NULL);
    }
    
    private static function Conectar() {
      
      try {
        if (self::$Conn == NULL) {
          self::$Conn = new PDO("mysql:host=".self::$Host.";port=".self::$Port.";dbname=".self::$DBname,self::$User,self::$Pass);
        }
      } catch (\PDOException $e) {
        //echo "Mensagem:" . $e->getMessage();
        echo "<p>N&atilde;o foi possivel conectar-se ao servidor de Banco de dados.</p>\n".chr(13).chr(10)."<p><strong>Erro: ".htmlentities($e->getMessage())."</strong></p>\n";
        
        $erro = "Não foi possivel conectar-se ao servidor de Banco de dados.\n".chr(13).chr(10)."<strong>Erro: ".htmlentities($e->getMessage())."\n".chr(13).chr(10);

      }
      
      return self::$Conn;
    }
  }