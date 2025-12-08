<?php

ob_start();

?>

<h1>je suis la page de connexion !!!</h1>

<?php

$description = "Page de connexion au site";
$title = "Page de connexion";
$content = ob_get_clean();
require_once('views/components/layout.php');
