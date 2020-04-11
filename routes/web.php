<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// route pour la page d'accueil
$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

// route pour la page détail d'un pokemon
$router->get(
    '/pokemon/details/{id}',
    [
        'uses' => 'PokemonController@details',
        'as' => 'pokemon-details'
    ]
);

// route pour la page qui liste les différents types de pokemons
$router->get(
    '/pokemon/liste-type',
    [
        'uses' => 'PokemonController@typeList',
        'as' => 'type-list'
    ]
);

// route pour la page des pokemons selon un type
$router->get(
    '/pokemon/liste-type/{id}',
    [
        'uses' => 'PokemonController@pokemonsByType',
        'as' => 'pokemon-by-type'
    ]
);
