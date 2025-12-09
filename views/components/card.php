<div class="card <?= $character["side"] === "dark" ? "darkshadow" : "lightshadow" ?>" style="width: 18rem;">
    <img src="public/images/personnages/<?= $character["image"] ?>" class="card-img-top" alt="smaug">
    <div class="card-body">
        <h5 class="card-title"><?= $character["name"] ?></h5>
        <p class="card-text d-flex justify-content-between">
            <span>Santé :</span>
            <span><?= $character["health"] ?> PV</span>
        </p>
        <p class="card-text d-flex justify-content-between">
            <span>Magie :</span>
            <span><?= $character["magic"] ?> PM</span>
        </p>
        <p class="card-text d-flex justify-content-between">
            <span>Puissance :</span>
            <span><?= $character["power"] ?> Atk</span>
        </p>

        <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-primary">Modifier</a>
            <a href="#" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
</div>