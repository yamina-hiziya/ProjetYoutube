<?php

require_once 'models/crudModel.php';

function createCurrentCharacter($name, $image, $health, $magic, $power, $side)
{
    if (createNewCharacterDB($name, $image, $health, $magic, $power, $side)) {
        header('Location:home');
        exit();
    } else {
        throw new Exception(message: "Echec de la création du personnage");
    }
}
