<?php

namespace App\Http\Livewire\Nacionalidad;

use App\Models\Nacionalidad;
use Livewire\Component;

class NacionalidadSelect extends Component
{
    public $descripcion;

    protected $listeners = ['render'];

    protected $rules = [
        'descripcion' => 'required',
    ];

    public function render()
    {
        $nacionalidad = Nacionalidad::where('estado_id', 1)->get();
        return view('livewire.nacionalidad.nacionalidad-select', compact('nacionalidad'));
    }

    public function save()
    {
        $this->validate();

        Nacionalidad::create([
            'descripcion' => $this->descripcion,
            'estado_id' => 1,
            'usuario_alta' => auth()->user()->id,
            'usuario_modificacion' => auth()->user()->id,
        ]);

        $this->reset('descripcion');
        $this->emit('nacionalidad-add', 'Nacionalidad Agregada');
    }

    public function resetUI()
    {
        $this->reset('descripcion');
        $this->emit('reloadClassCSs');
    }
}
