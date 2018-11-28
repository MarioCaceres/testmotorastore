<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $table = "producto";
        protected $fillable = [
        'nombre',
        'stock',
        'precio'
    ];
    
    public function detalle_venta()
    {
        return $this->hasMany(detalle_venta::class,'id_detalle_venta','id');
    }
