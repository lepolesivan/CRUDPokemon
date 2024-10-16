<?php
namespace App\Controllers;

use App\Utils\AbstractController;
use App\Models\Pokemon;

    class PokemonController extends AbstractController
    {

        public function addPokemon()
        {

            if(isset($_POST['name'])){
 
                $name = htmlspecialchars($_POST['name']);
                $type = htmlspecialchars($_POST['type']);
                $level = htmlspecialchars($_POST['level']);
                $description = htmlspecialchars($_POST['description']);

                $this->check('name', $name);
                $this->check('type', $type);
                $this->check('level', $level);
                $this->check('description', $description);


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

        public function detail()
        {
            if($_GET['id']){
                $id = $_GET['id'];
                $pokemons = new Pokemon($id, null, null, null, null);
                $afficher = $pokemons->getByID();
            }
            
            require_once(__DIR__ . '/../Views/pokemon/detail.view.php');
        }

        public function modify()
        {
            if($_GET['id']){
                $id = $_GET['id'];

                $pokemons = new Pokemon($id, null, null, null, null);
                $pokemon = $pokemons->getById();

                if($_POST){
                    $name = $_POST['name'];
                    $type = $_POST['type'];
                    $level = $_POST['level'];
                    $description = $_POST['description'];

                    $update = new Pokemon($id, $name, $type, $level, $description);
                    $update->update();

                    $this->redirectToRoute('/');
                }
            }
            require_once(__DIR__ . '/../Views/pokemon/modify.view.php');
        }

        public function deletePokemon()
        {
            if($_POST['id']){
                $id = $_POST['id'];

                $delete = new Pokemon($id, null, null, null, null);
                $delete->delete();
                $this->redirectToRoute('/');
            }
        }
    }