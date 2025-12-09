<?php

showArray($character);

?>
<h1 class="text-center mb-4">Modifier un Combattant</h1>


<form action="updateCharacter" method="post">
    <input type="hidden" name="id" value="<?= $character["id"] ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nom du personnage</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $character['name'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Avatar du personnage</label>
        <input type="text" class="form-control" id="image" name="image" value="<?= $character['image'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="health" class="form-label">Santé du personnage</label>
        <input type="number" class="form-control" id="health" name="health" value="<?= $character['health']  ?>" required>
    </div>
    <div class="mb-3">
        <label for="magic" class="form-label">Magie du personnage</label>
        <input type="number" class="form-control" id="magic" name="magic" value="<?= $character['magic'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="power" class="form-label">Puissance du personnage</label>
        <input type="number" class="form-control" id="power" name="power" value="<?= $character['power'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="side" class="form-label">Coté de la force ?</label>
        <select class="form-select" id="side" name="side" type="text" required>
            <?php foreach ($sides as $side) : ?>
                <option value="<?= $side['side'] ?>"
                    <?= $side['side'] === $character['side'] ? 'selected' : '' ?>><?= $side['side'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3 w-100">Modifiez ce personnage</button>
</form>