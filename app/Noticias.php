<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    public function adm()
    {
    	return $this->belongsTo(Usuarios::class, 'id_adm');
    }  
}
