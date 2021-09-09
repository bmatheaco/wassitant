<?php

use Src\Classes;
use Src\Classes\ClassConDB;
use Src\Classes\ClassSQLQuery;

header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

$bd         = new ClassConDB();
$sql        = new ClassSQLQuery();
$Dispatch   = new App\Dispatch();