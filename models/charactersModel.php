<?php

require_once 'models/pdoModels.php';


function getAllCharacters(): array
{
    $req = "SELECT * FROM characters";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}
