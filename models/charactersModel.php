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

function getCharacter(int $id): array
{
    $req = "SELECT * FROM characters WHERE id = :id";
    $stmt = setDB()->prepare($req);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $datas = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}
