<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_venta extends Model
{
    public $table = "detalle_venta";
        protected $fillable = [
        'cantidad',
        'id_producto',
        'id_venta'
    ];
    
    public function venta()
    {
        return $this->hasOne(venta::class,'id_venta','id');
    }
    public function producto()
    {
        return $this->hasMany(producto::class,'id_producto','id');
    }
}
