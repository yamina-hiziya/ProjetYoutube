<h1 class="text-center mb-4">Mes fighters de l'ombre</h1>


<div class="d-flex flex-wrap gap-3 justify-content-center">
    <?php foreach ($characters as $character) {
        require 'views/components/card.php';
    } ?>
</div>