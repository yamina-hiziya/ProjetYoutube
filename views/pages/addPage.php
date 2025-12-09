<?php


//showArray($sides);

?>
<h1 class="text-center mb-4">Ajouter un Combattant</h1>


<form action="createNewCharacter" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nom du personnage</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom de ce personnage" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Avatar du personnage</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Entrez l'avatar de ce personnage" required>
    </div>
    <div class="mb-3">
        <label for="health" class="form-label">Santé du personnage</label>
        <input type="number" class="form-control" id="health" name="health" placeholder="Entrez les points de vie de ce personnage" required>
    </div>
    <div class="mb-3">
        <label for="magic" class="form-label">Magie du personnage</label>
        <input type="number" class="form-control" id="magic" name="magic" placeholder="Entrez les points de magie de ce personnage" required>
    </div>
    <div class="mb-3">
        <label for="power" class="form-label">Puissance du personnage</label>
        <input type="number" class="form-control" id="power" name="power" placeholder="Entrez la puissance de ce personnage" required>
    </div>
    <div class="mb-3">
        <label for="side" class="form-label">Coté de la force ?</label>
        <select class="form-select" id="side" name="side" type="text" required>
            <option disabled selected>⏬️ Choisissez le coté du personnage ⏬️</option>
            <?php foreach ($sides as $side) : ?>
                <option value="<?= $side['side'] ?>"><?= ucfirst($side['side']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3 w-100">Ajouter ce personnage</button>
</form>