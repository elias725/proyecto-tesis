<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;


class ClientesController extends Controller
{ 
    public function index()
    {
        $clientes = Clientes::paginate(10);
        return view('Contador.index', compact('clientes'));
    }

    public function view()
    {
        $clientes = Clientes::all();
        return view('Contador.view');
    }
}


