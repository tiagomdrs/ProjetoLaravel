<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rotas extends Model
{
    public function funcionario()
    {
    	return $this->belongsTo(Funcionarios::class, 'id');
    }

    public function Caminhao()
    {
    	return $this->belongsTo(Caminhoes::class, 'id');
    }
}
