<?php
require_once(__DIR__ . '/partials/head.php');
?>
<section>
    <div class="container-fluid images"></div>
</section>

<section>
    <h1 style="text-align: center;">Pokemon</h1>
    <?php
    foreach($afficher as $pokemon){
    ?>
        <div class="d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nom : <?= $pokemon->getName() ?></h5>
                    <p class="card-text">Description : <?= $pokemon->getDescrip() ?></p>
                    <p class="card-text">Type : <?= $pokemon->getType() ?></p>
                    <p class="card-text">Niveau : <?= $pokemon->getLevel() ?></p>
                    <a href="/supprimer" class="btn btn-danger">Supprimer</a>
                    <a href="/modifier?id=<?= $pokemon->getId() ?>" class="btn btn-primary">Modifier</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</section>

<section>
    <div class="container-fluid image"></div>
</section>
    

<?php
require_once(__DIR__ . '/partials/footer.php');
?>