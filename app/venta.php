<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public $table = "venta";
        protected $fillable = [
        'canal',
        'fecha',
        'id_detalle_venta',
        'id_usuario'
    ];
    
    public function user()
    {
        return $this->hasOne(User::class,'id_usuario','id');
    }
    public function detalle_venta()
    {
        return $this->hasMany(detalle_venta::class,'id_detalle_venta','id');
    }
}
