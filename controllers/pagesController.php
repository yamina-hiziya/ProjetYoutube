<?php

function homePage()
{
    $datas_page = [
        "description" => "Page d'accueil du site",
        "title" => "page d'accueil",
        "view" => "views/pages/homePage.php",
        "layout" => "views/components/layout.php"
    ];
    drawPage($datas_page);
}

function testPage()
{
    $donnees_recup = [
        "name" => "John",
        "lastname" => "Doe",
        "age" => 30,
    ];

    $datas_page = [
        "description" => "Page de test au site",
        "title" => "Page de test",
        "view" => "views/pages/testPage.php",
        "layout" => "views/components/layout.php",
        "data_recep" => $donnees_recup
    ];
    drawPage($datas_page);
}
