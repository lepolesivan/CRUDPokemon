<?php
require_once(__DIR__ . '/partials/head.php');
?>
<main>
<section>
    <div class="container-fluid images"></div>
</section>

<section class="bg-black">
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
                    <a href="/detail?id=<?= $pokemon->getId() ?>" class="btn m-1 btn-warning">Détaille</a>
                    <a href="/modifier?id=<?= $pokemon->getId() ?>" class="btn m-1 btn-primary">Modifier</a>
                    <form action="/deletePokemon" method="POST">
                        <input type="hidden" name="id" id="id" value="<?= $pokemon->getId() ?>">
                        <button type="submit" class="btn btn-danger m-1">Suprimer le Pokemon</button>
                    </form>
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
    
</main>
<?php
require_once(__DIR__ . '/partials/footer.php');
?>