<?php

require_once 'controllers/pagesController.php';
require_once 'controllers/crudController.php';
require_once 'controllers/utilities.php';

try {
    if (empty($_GET['page'])) {
        $page = 'home';
    } else {
        $path = explode(separator: '/', string: filter_var(value: $_GET['page'], filter: FILTER_SANITIZE_URL));
        $page = $path[0];
    }

    switch ($page) {
        case 'home':
            homePage();
            break;

        case 'add_character_page':
            addCharacterPage();
            break;
        case 'createNewCharacter':
            //showArray($_POST);
            //on securise nos informations !
            $name = htmlspecialchars(string: $_POST['name']);
            $image = htmlspecialchars(string: $_POST['image']);
            $health = htmlspecialchars(string: $_POST['health']);
            $magic = htmlspecialchars(string: $_POST['magic']);
            $power = htmlspecialchars(string: $_POST['power']);
            $side = htmlspecialchars(string: $_POST['side']);
            if (empty($name) || empty($image) || empty($health) || empty($magic) || empty($power) || empty($side)) {
                throw new Exception(message: "Tous les champs sont obligatoires");
            }
            createCurrentCharacter($name, $image, $health, $magic, $power, $side);
            break;

        default:
            throw new Exception(message: "La page n'existe pas");
            break;
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
