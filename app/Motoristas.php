<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motoristas extends Model
{
    public function Rota()
    {
    	return $this->hasMany(Rotas::class, 'id');
    }
}
