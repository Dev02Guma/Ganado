<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FincaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getFincas()
    {
        $Headers = array(
            'Header'    => 'Fincas',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Finca', 'Lista'),
        );

        return view('Finca.Tabla', compact('Headers'));
        
    }
}
