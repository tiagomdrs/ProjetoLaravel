<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteudoController extends Controller
{
    public function sobre()
	{
		return view('Conteudo.sobre');
	}

	public function coleta()
	{
		return view('Conteudo.coleta_seletiva');
	}

	public function lixeiras()
	{
		return view('Conteudo.lixeiras');
	}

	public function reciclagem()
	{
		return view('Conteudo.reciclagem');
	}

	public function desenvolvedores()
	{
		return view('Conteudo.desenvolvedores');
	}
}
