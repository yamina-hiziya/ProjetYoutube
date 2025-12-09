<?php

require_once 'controllers/pagesController.php';
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

        default:
            throw new Exception(message: "La page n'existe pas");
            break;
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
