<?php

namespace App\Http\Livewire\Ciudad;

use App\Models\Ciudad;
use Livewire\Component;

class CiudadSelectEdit extends Component
{
    public $ciudad_id, $descripcion;

    protected $listeners = ['render'];

    protected $rules = [
        'descripcion' => 'required',
    ];

    public function mount($ciudad_id)
    {
        if(empty($this->ciudad_id))
        {
            $this->ciudad_id = $ciudad_id;
        }

    }

    public function render()
    {
        $ciudad = Ciudad::where('estado_id', 1)->get();
        return view('livewire.ciudad.ciudad-select-edit', compact('ciudad'));
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
