<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    public $table = "historial";
        protected $fillable = [
        'fecha',
        'descripcion',
        'estado_anterior',
        'estado_nuevo',
        'tabla',
        'atributo',
        'id_usuario'
    ];
    
    public function users()
    {
        return $this->belongsTo(User::class,'id_usuario');
    }
}
