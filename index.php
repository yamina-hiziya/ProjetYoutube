<?php

require_once 'controllers/pagesController.php';
require_once 'controllers/utilities.php';

try {
    if (empty($_GET['page'])) {
        $page = 'accueil';
    } else {
        $path = explode(separator: '/', string: filter_var(value: $_GET['page'], filter: FILTER_SANITIZE_URL));
        $page = $path[0];
    }

    switch ($page) {
        case 'accueil':
            homePage();
            break;
        case 'connexion':
            require_once 'views/pages/loginPage.php';
            break;
        case 'test':
            testPage();
            break;
        default:
            throw new Exception(message: "La page n'existe pas");
            break;
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
