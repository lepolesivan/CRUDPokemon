<?php
require_once(__DIR__ . '/../partials/head.php');
?>
<section>
    <div class="container-fluid images"></div>
</section>

<section>
    <h1>Ajouter un pokemon</h1>
    <form method="POST">
        <label for="name">Nom</label>
        <input type="text" name="name">
        <?php if (isset($this->arrayError['name'])) {
            ?>
                <p class='text-danger'><?= $this->arrayError['name'] ?></p>
            <?php
            } ?>
        <label for="type">Type</label>
        <input type="text" name="type">
        <?php if (isset($this->arrayError['type'])) {
            ?>
                <p class='text-danger'><?= $this->arrayError['type'] ?></p>
            <?php
            } ?>
        <label for="level">Level</label>
        <input type="int" name="level">
        <?php if (isset($this->arrayError['level'])) {
            ?>
                <p class='text-danger'><?= $this->arrayError['level'] ?></p>
            <?php
            } ?>
        <label for="description">Description</label>
        <textarea name="description"></textarea>
        <?php if (isset($this->arrayError['description'])) {
            ?>
                <p class='text-danger'><?= $this->arrayError['description'] ?></p>
            <?php
            } ?>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</section>

<section>
    <div class="container-fluid image"></div>
</section>

<?php
require_once(__DIR__ . '/../partials/footer.php');
?>