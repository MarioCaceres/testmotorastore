<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public $table = "venta";
        protected $fillable = [
        'canal',
        'fecha',
        'estado',
        'id_detalle_venta',
        'id_usuario',
        'id_cliente'
    ];
    
    public function user()
    {
        return $this->hasOne(User::class,'id_usuario','id');
    }
    public function cliente()
    {
        return $this->hasOne(cliente::class,'id_cliente','id');
    }
}
