<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subasta;


class SubastaController extends Controller
{
    function ViewHome()  
    {

        $Headers = array(
            'Header'    => 'LOTES DISPONIBLE AL: 00/00/0000',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Subasta'),
        );
        return view('Subasta.home', compact('Headers'));
    }
    function Detalles() 
    {
        $Headers = array(
            'Header'    => 'LOTES : 0000',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Subasta', 'Detalles'),
        );

        return view('Subasta.Detalles', compact('Headers'));
    }
    function Listas() 
    {
        $Headers = array(
            'Header'    => 'Listas de Subastas',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Subasta', 'Listas'),
        );

        return view('Subasta.Table', compact('Headers'));
    }
}
