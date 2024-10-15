<?php

namespace App\Controllers;

use App\Utils\AbstractController;
use App\Models\Pokemon;

class HomeController extends AbstractController
{
    public function index()
    {
        $pokemons = new Pokemon(null, null, null, null, null);
        $afficher = $pokemons->getAll();
        require_once(__DIR__ . '/../Views/home.view.php');
    }
}