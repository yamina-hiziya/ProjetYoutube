<h1 class="text-center mb-4">Tous mes fighters</h1>

<?php
//showArray($sides);
//showArray($characters);
?>


<!-- <div class="card darkshadow" style="width: 18rem;"> 
    <img src="public/images/personnages/dragon.jpg" class="card-img-top" alt="smaug">
    <div class="card-body">
        <h5 class="card-title">Smaug</h5>
        <p class="card-text d-flex justify-content-between">
            <span>Santé :</span>
            <span>10 PV</span>
        </p>
        <p class="card-text d-flex justify-content-between">
            <span>Magie :</span>
            <span>20 PM</span>
        </p>
        <p class="card-text d-flex justify-content-between">
            <span>Puissance :</span>
            <span>15 Atk</span>
        </p>

        <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-primary">Modifier</a>
            <a href="#" class="btn btn-danger">Supprimer</a>
        </div>
    </div> 
</div>-->

<div class="d-flex flex-wrap gap-3 justify-content-center">
    <?php foreach ($characters as $character) {
        require 'views/components/card.php';
    } ?>
</div>