<?php

namespace App\Http\Livewire\Solicitud;

use App\Models\Ciudad;
use App\Models\Persona;
use Livewire\Component;

class PersonaDatos extends Component
{
    public $persona, $direccion, $celular, $linea_baja, $ciudad_id;
    public $continua = 0;

    protected $listeners = ['render'];

    public function mount(Persona $persona)
    {
        $this->persona = $persona;
        $this->direccion = $persona->direccion;
        $this->celular = $persona->celular;
        $this->linea_baja = $persona->linea_baja;
        $this->ciudad_id = $persona->ciudad_id;
    }

    public function render()
    {
        $ciudad = Ciudad::where('estado_id', 1)->get();
        return view('livewire.solicitud.persona-datos', compact('ciudad'));
    }

    public function save()
    {
        $persona_a = Persona::find($this->persona->id);
        $persona_a->update([
            'direccion' => $this->direccion,
            'celular' => $this->celular,
            'linea_baja' => $this->linea_baja,
        ]);

        $this->continua = 1;
        $this->emit('persona-up');
    }
}
