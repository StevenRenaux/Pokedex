<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    /**
     * Association de la table avec le Model
     *
     * @var string
     */
    protected $table = 'pokemon';

    /**
     * La clé primaire associé avec la table
     *
     * @var string
     */
    protected $primaryKey = 'numero';

    /**
     * Avoir les relation avec pokemon_type
     */
    public function type()
    {
        return $this->belongsToMany('App\Models\Type' , 'App\Models\PokemonType' , 'pokemon_numero' , 'type_id');
    }
}
