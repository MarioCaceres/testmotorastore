<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    public $table = "permiso";
        protected $fillable = [
        'tipo'
    ];
    public function usuarios()
    {
        return $this->hasMany(User::class,'id_permiso','id');
    }
}
