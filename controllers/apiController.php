<?php

function apiCharacters()
{
    $allCharacters = getAllCharacters();
    sendJson_get($allCharacters);
}
