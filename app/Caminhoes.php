<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caminhoes extends Model
{
    public function Rota()
    {
    	return $this->hasMany(Rotas::class, 'id');
    }
}
