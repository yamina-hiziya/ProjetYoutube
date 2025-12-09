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
        "description" => "Page de modification d'un nouveau personnage",
        "title" => "Page de modification",
        "view" => "views/pages/addPage.php",
        "layout" => "views/components/layout.php",
        "sides" => $sides,
    ];
    drawPage($datas_page);
}

function updateCharacterPage($id)
{
    $character = getCharacter($id);
    $side = getAllSides();

    $datas_page = [
        "description" => "Page de modification d'un personnage",
        "title" => "Page de modification",
        "view" => "views/pages/updatePage.php",
        "layout" => "views/components/layout.php",
        "character" => $character,
        "sides" => $side,
    ];
    drawPage($datas_page);
}
function lightCharactersPage()
{
    $characters = getAllCharacters();

    $datas_page = [
        "description" => "Page des personnages de la lumière",
        "title" => "Page des gentils",
        "view" => "views/pages/lightPage.php",
        "layout" => "views/components/layout.php",
        "characters" => $characters,
    ];
    drawPage($datas_page);
}
function darkCharactersPage()
{
    $characters = getCharactersBySide('dark');

    $datas_page = [
        "description" => "Page des personnages de l'ombre",
        "title" => "Page des méchants",
        "view" => "views/pages/darkPage.php",
        "layout" => "views/components/layout.php",
        "characters" => $characters,
    ];
    drawPage($datas_page);
}
