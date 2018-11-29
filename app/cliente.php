<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $table = "cliente";
        protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
        'correo'
    ];
    public $timestamps = false;
    public function detalle_venta()
    {
        return $this->hasMany(detalle_venta::class,'id_cliente','id');
    }
}
