<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pokemon';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'numero';

    /**
     * Get all related pokemon_type
     */
    public function type()
    {
        return $this->belongsToMany('App\Models\Type' , 'App\Models\PokemonType' , 'pokemon_numero' , 'type_id');
    }
}
