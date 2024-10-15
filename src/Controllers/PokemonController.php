<?php
namespace App\Controllers;

use App\Utils\AbstractController;
use App\Models\Pokemon;

    class PokemonController extends AbstractController
    {

        public function addPokemon()
        {
            if(isset($_GET['name'])){
                $this->check('name', $_POST['name']);
                $this->check('type', $_POST['type']);
                $this->check('level', $_POST['level']);
                $this->check('description', $_POST['description']);

                if (empty($this->arrayError)) {
                    $name = htmlspecialchars($_POST['name']);
                    $type = htmlspecialchars($_POST['type']);
                    $level = htmlspecialchars($_POST['level']);
                    $description = htmlspecialchars($_POST['description']);

                    $pokemon = new Pokemon(null, $name, $type, $level, $description);

                        // Enregistrer le Pokémon dans la base de données
                    if ($pokemon->save()) {
                        // Redirection vers une page de succès ou afficher un message de succès
                        $this->redirectToRoute('/');
                    } else {
                        echo "Erreur lors de l'ajout du Pokémon.";
                    }
                }
                
            }

            require_once(__DIR__ . '/../Views/pokemon/createPokemon.view.php');
        }
    }