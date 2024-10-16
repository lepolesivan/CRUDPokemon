<?php
require_once(__DIR__ . '/../partials/head.php');
?>

<section>
    <h1 style="text-align: center;">Détaille du pokemon</h1>
    <div class="container">
        <h2><?= $afficher->getName()?></h2>
        <p>Type: <?= $afficher->getType()?></p>
        <p>Niveau: <?= $afficher->getLevel()?></p>
        <p class="text-center">Description:</p>
        <p><?= $afficher->getDescrip()?></p>
    </div>
</section>

<?php
require_once(__DIR__ . '/../partials/footer.php');
?>