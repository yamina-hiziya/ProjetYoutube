<h1 class="text-center mb-4">Mes Fighters de la Lumière</h1>

<div class="d-flex flex-wrap gap-3 justify-content-center">
    <?php foreach ($characters as $character) {
        if ($character['side'] === 'light') {
            require 'views/components/card.php';
        }
    }
    ?>
</div>