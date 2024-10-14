<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BovinoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getBovinos()
    {
        $Headers = array(
            'Header'    => 'Bovinos',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Bovinos', 'Lista'),
        );

        return view('Bovinos.Tabla', compact('Headers'));
        
    }
    public function getDetalles()
    {
        $Headers = array(
            'Header'    => 'Bovinos Detalles',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Bovinos', 'Detalles'),
        );

        return view('Bovinos.DetallesBovinos', compact('Headers'));
        
    }
}
