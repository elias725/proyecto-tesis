<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{ 
    public function __invoke(){
        /*return view("/")*/
        return "Vista del listado de clientes";
    }
}
