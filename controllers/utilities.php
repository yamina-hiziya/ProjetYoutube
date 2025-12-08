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
