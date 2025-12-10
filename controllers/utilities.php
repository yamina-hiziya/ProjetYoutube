<?php
//functions utiles pour le projet

function showArray($array): void
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//drawpage est une fonction qui est utile et qu'on va utiliser souvent
function drawPage($datas_page): void
{
    //showArray($datas_page);
    extract($datas_page);
    //echo $title;

    ob_start();
    require_once($view);
    $content = ob_get_clean();
    require_once($layout);
}
function sendJson_get($data): void
{
    //Tous les sites y ont accès
    header('Access-Control-Allow-Origin:*');
    //On autorise la méthode GET et non post, put, patch, delete,head et options
    header('Access-Control-Allow-Methods:GET');
    //on envoie en JSON
    header('Content-Type:application/json');
    echo json_encode($data);
}
