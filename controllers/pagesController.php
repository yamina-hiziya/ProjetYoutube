<?php
require_once 'models/sidesModel.php';
require_once 'models/charactersModel.php';

function homePage()
{
    $sides = getAllSides();
    $characters = getAllCharacters();

    $datas_page = [
        "description" => "Page d'accueil du site",
        "title" => "page d'accueil",
        "view" => "views/pages/homePage.php",
        "layout" => "views/components/layout.php",
        "sides" => $sides,
        "characters" => $characters,
    ];
    drawPage($datas_page);
}

function addCharacterPage()
{
    $sides = getAllSides();

    $datas_page = [
        "description" => "Page de création d'un nouveau personnage",
        "title" => "page de création",
        "view" => "views/pages/addPage.php",
        "layout" => "views/components/layout.php",
        "sides" => $sides,
    ];
    drawPage($datas_page);
}
