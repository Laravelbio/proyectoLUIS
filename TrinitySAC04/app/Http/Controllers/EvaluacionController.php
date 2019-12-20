<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class EvaluacionController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth');

    }

    public function index() {

        

        return view('gestion.evaluacion');

    }

    public function listaclientes() {
        
        $clientes = App\Cliente::all();

        return view('cliente', compact('clientes'));

    }

    public function selectcliente($id) {
        
        $cliente = App\Cliente::FindOrFail($id);

        return view('evaluacion', compact('cliente'));

    }

}