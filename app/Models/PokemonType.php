<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PokemonType extends Pivot
{
    /**
     * Association de la table avec le Model
     *
     * @var string
     */
    protected $table = 'pokemon_type';

}
