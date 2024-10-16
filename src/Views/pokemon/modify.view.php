<?php
require_once(__DIR__ . '/../partials/head.php');
?>
<div class="bg_pokemonR">
<div class="formulaire">

    <h1>Modifier <?= $pokemon->getName()?></h1>
    <form method="POST">
        <label for="name">Nom du Pokémon:</label>
        <input type="text" id="name" value="<?= $pokemon->getName()?>" name="name" placeholder="Entrez le nom du Pokémon" required>
        <?php if (isset($this->arrayError['name'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['name'] ?></p>
        <?php
        } ?>

        <label for="type">Type de Pokémon:</label>
        <select name="type">
            <option value="<?= $pokemon->getType()?>" class=""><?= $pokemon->getType()?></option>
            <option value="Feu">Feu</option>
            <option value="Eau">Eau</option>
            <option value="Plante">Plante</option>
            <option value="Électrique">Électrique</option>
            <option value="Roche">Roche</option>
            <option value="Poison">Poison</option>
            <option value="Psy">Psy</option>
            <option value="Combat">Combat</option>
            <option value="Normal">Normal</option>
            <option value="Insecte">Insecte</option>
            <option value="Spectre">Spectre</option>
            <option value="Glace">Glace</option>
            <option value="Dragon">Dragon</option>
        </select>

        <?php if (isset($this->arrayError['type'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['type'] ?></p>
        <?php
        } ?>

        <label for="level">Niveau du Pokémon:</label>
        <input type="number" id="level" name="level" min="1" max="100" value="<?= $pokemon->getLevel()?>" required>
        <?php if (isset($this->arrayError['niveau'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['level'] ?></p>
        <?php
        } ?>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" placeholder="Entrez une brève description" required><?= $pokemon->getDescrip()?></textarea>
        <?php if (isset($this->arrayError['description'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['description'] ?></p>
        <?php
        } ?>

        <button type="submit">Ajouter le Pokémon</button>
    </form>
</div>
</div>
<?php
require_once(__DIR__ . '/../partials/footer.php');
?>