<?php

$controller = new App\Controller\ControllerJson();
$controller->Con_dadosAnime();
$dados = $controller->view_dadosAnime();

//var_dump($dados);
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)

?>