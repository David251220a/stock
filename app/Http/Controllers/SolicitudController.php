<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{

    public function index()
    {
        $personas = Persona::where('estado_id', 1)
        ->orderBy('apellido', 'ASC')
        ->orderBy('nombre', 'ASC')
        ->get();

        return view('solicitud.index', compact('personas'));
    }

    public function edit(Persona $solicitud)
    {
        $persona = $solicitud;
        return view('solicitud.edit', compact('persona'));
    }

}
