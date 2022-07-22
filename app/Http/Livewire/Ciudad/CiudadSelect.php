<?php

namespace App\Http\Livewire\Ciudad;

use App\Models\Ciudad;
use Livewire\Component;

class CiudadSelect extends Component
{
    public $descripcion;

    protected $listeners = ['render'];

    protected $rules = [
        'descripcion' => 'required',
    ];

    public function render()
    {
        $ciudad = Ciudad::where('estado_id', 1)->get();
        // $this->emit('reloadClassCSs');
        return view('livewire.ciudad.ciudad-select', compact('ciudad'));
    }

    public function save()
    {
        $this->validate();

        Ciudad::create([
            'descripcion' => $this->descripcion,
            'estado_id' => 1,
            'usuario_alta' => auth()->user()->id,
            'usuario_modificacion' => auth()->user()->id,
        ]);

        $this->reset('descripcion');
        $this->emit('ciudad-add', 'Ciudad Agregada');
    }

    public function resetUI()
    {
        $this->reset('descripcion');
        $this->emit('reloadClassCSs');
    }
}
