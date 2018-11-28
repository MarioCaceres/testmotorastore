<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    public $table = "detalle_venta";
        protected $fillable = [
        'id_producto',
        'id_proveedor'
    ];
    
    public function proveedor()
    {
        return $this->hasMany(proveedor::class,'id_proveedor','id');
    }
    public function producto()
    {
        return $this->hasMany(producto::class,'id_producto','id');
    }
}
