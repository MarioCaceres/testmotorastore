<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public $table = "ventas";
        protected $fillable = [
        'canal',
        'fecha',
        'es',
        'id_detalle_venta',
        'id_user'
    ];
    
    public function user()
    {
        return $this->hasmany(User::class,'id_detalle_venta');
    }
    public function secciones()
    {
        return $this->hasOne(seccion::class,'id_user','id');
    }
}
