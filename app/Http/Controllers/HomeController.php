<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $noticias = DB::select('select * from noticias');
        return view('index',['noticias' => $noticias]);
    }

    public function home()
    {
        $type = auth()->user()->type;

        if ($type == 'admin') {
            $id = Auth::id();
            return view ('Admin.home_admin', ['id' => $id]);
        }

        else if ($type == 'user') {
            return view ('Usuarios.home_user');;
        }

        else{
 
            return redirect()->to(route('index'));
        }
    }
}
