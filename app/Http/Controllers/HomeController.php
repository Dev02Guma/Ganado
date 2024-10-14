<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Headers = array(
            'Header'    => 'Home Princip',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Home'),
        );

        return view('Home.index', compact('Headers'));
    }
    public function Usuarios()
    {
        $Headers = array(
            'Header'    => 'Tabla de Usuarios',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Usuarios', 'Lista'),
        );
        return view('Usuario.Lista', compact('Headers'));
    }
}
