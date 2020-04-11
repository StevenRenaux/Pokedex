<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'type';

    /**
     * Get all related pokemon_type
     */
    public function pokemon()
    {
        return $this->belongsToMany('App\Models\Pokemon');
    }
}
