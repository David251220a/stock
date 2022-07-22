<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidad;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::where('estado_id', 1)
        ->orderBy('apellido', 'ASC')
        ->orderBy('nombre', 'ASC')
        ->get();

        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        //dd($request->foto);
        $request->validate([
            'documento' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png'
        ]);

        $documento = str_replace('.', '', $request->documento);
        $validar = Persona::where('documento', $documento)->first();
        if(!empty($validar)){
            return redirect()->route('persona.create')
            ->withInput()
            ->withErrors('Ya existe persona con este numero de cedula: ' . $documento .' !.');
        }
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $fecha_nacimiento = $request->fecha_nacimiento;
        $direccion = $request->direccion;
        $celular = $request->celular;
        $linea_baja = $request->linea_baja;
        $email = $request->email;
        $foto = '';
        if($request->file('foto')){
            $filePath = $request->file('foto')->store('public/personas');
            $foto = $filePath;
        }

        Persona::create([
            'documento' => $documento,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'fecha_nacimiento' => $fecha_nacimiento,
            'email' => $email,
            'foto' => $foto,
            'direccion' => $direccion,
            'linea_baja' => $linea_baja,
            'celular' => $celular,
            'ciudad_id' => $request->ciudad,
            'estado_id' => 1,
            'nacionalidad_id' => $request->nacionalidad,
            'usuario_alta' => auth()->user()->id,
            'usuario_modificacion' => auth()->user()->id,
        ]);

        return redirect()->route('persona.index')->with('message', 'Se ha creado con exito la persona!.');
    }

    public function edit(Persona $persona)
    {
        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'documento' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png'
        ]);

        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $fecha_nacimiento = $request->fecha_nacimiento;
        $direccion = $request->direccion;
        $celular = $request->celular;
        $linea_baja = $request->linea_baja;
        $email = $request->email;
        $foto = $persona->foto;
        if($request->file('foto')){
            $filePath = $request->file('foto')->store('public/personas');
            $foto = $filePath;
        }

        $persona->update([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'fecha_nacimiento' => $fecha_nacimiento,
            'email' => $email,
            'foto' => $foto,
            'direccion' => $direccion,
            'linea_baja' => $linea_baja,
            'celular' => $celular,
            'ciudad_id' => $request->ciudad,
            'estado_id' => 1,
            'nacionalidad_id' => $request->nacionalidad,
            'usuario_alta' => auth()->user()->id,
            'usuario_modificacion' => auth()->user()->id,
        ]);

        return redirect()->route('persona.index')->with('message', 'Se ha editado con exito la persona!.');
    }

}
