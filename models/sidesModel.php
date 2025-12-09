<?php

require_once 'models/pdoModels.php';

function GetAllSides(): array
{
    $req = "SELECT * FROM sides";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}
