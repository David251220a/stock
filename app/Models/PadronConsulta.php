<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PadronConsulta extends Model
{
    use HasFactory;

    protected $table = 'padron_consulta';

    protected $guarded=[];

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
