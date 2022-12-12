<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padron extends Model
{
    use HasFactory;

    protected $table = 'padron';

    public function consulta(){
        return $this->hasMany(PadronConsulta::class, 'padron_id', 'CodPadron')->orderBy('id', 'DESC');
    }


}
