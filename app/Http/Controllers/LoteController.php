<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getLotes()
    {
        $Headers = array(
            'Header'    => 'Lotes',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Lote', 'Lista'),
        );

        return view('Lotes.Tabla', compact('Headers'));
        
    }
    
}
