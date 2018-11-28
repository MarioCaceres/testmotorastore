<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    public $table = "proveedor";
        protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
        'suministro',
        'correo'
    ];
    
    public function contacto()
    {
        return $this->hasMany(contacto::class,'id_proveedor','id');
    }
}
