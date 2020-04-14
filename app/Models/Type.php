<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * Association de la table avec le Model
     *
     * @var string
     */
    protected $table = 'type';

    /**
     * Avoir les relation avec pokemon_type
     */
    public function pokemon()
    {
        return $this->belongsToMany('App\Models\Pokemon');
    }
}
