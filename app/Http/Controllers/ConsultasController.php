<?php

namespace App\Http\Controllers;

use App\Models\Consultas;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function obtenerEjemplos() {
        $ejemplos = Consultas::all();
        return view('/index', ['ejemplos' => $ejemplos]);
    }
}