<?php
#Arquivos diretórios raízes
$PastaInterna="";
define('DIR_PAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIR_REQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIR_REQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios Específicos

define('DIR_IMG',DIR_PAGE."public/img/");
define('DIR_CSS',DIR_PAGE."public/css/");
define('DIR_JS',DIR_PAGE."public/js/");
define('DIR_AUDIO',DIR_PAGE."public/audio/");
define('DIR_FONTES',DIR_PAGE."public/fontes/");

#Acesso ao banco de dados

define('HOST',"localhost");
define('DB',"wassistant");
define('USER',"root");
define('PASS',"");
define('PORT',"3306");