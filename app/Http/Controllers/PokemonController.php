<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Pokemon;
use App\Models\Type;

class PokemonController extends BaseController
{
    /**
     * HTTP method: GET
     * URL : /pokemon/details/{numero}
     */
    public function details($numero)
    {
        $pokemonNumero = intval($numero);

        $pokemon = Pokemon::find($pokemonNumero);

        if ($pokemon == true) {
            $type = Pokemon::find($pokemonNumero)->type;

            return view(
            // Nom de la View dans /resources/views
            // => /resources/views/pokemon/details.php
            'pokemon.details',
            // Données à transmettre à la View
            [
                'title' => 'détails',
                'pokemon' => $pokemon,
                'type' => $type,
            ]
        );
        }
        else{
            abort(404);
        }
    }

    /**
     * HTTP method: GET
     * URL : /pokemon/liste-type
     */
    public function typeList()
    {
        $allTypes = Type::all();

        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/pokemon/type.list.php
            'pokemon.type-list',
            // Données à transmettre à la View
            [
                'title' => 'liste des types',
                'allTypes' => $allTypes,
            ]
        );
    }

    /**
     * HTTP method: GET
     * URL : /pokemon/liste-type/{id}
     */
    public function pokemonsByType($id){

        $typeId = intval($id);

        $type = Type::find($typeId);

        if (!empty($type)) {
            $allPokemon = Type::find($typeId)->pokemon;

            return view(
            // Nom de la View dans /resources/views
            // => /resources/views/pokemon/pokemons-by-type.php
            'pokemon.pokemons-by-type',
            // Données à transmettre à la View
            [
                'title' => 'Pokemons par type',
                'allPokemon' => $allPokemon,
                'type' => $type,
            ]
        );
        }else{
            abort(404);
        }
    }
}



