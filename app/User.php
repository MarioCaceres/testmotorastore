<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'activo',
        'id_permiso'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token'
    ];

    public function permiso()
    {
        return $this->belongsTo(permiso::class,'id_permiso','id');
    }
    public function historial()
    {
        return $this->hasMany(historial::class,'id_usuario','id');
    }
    public function venta()
    {
        return $this->hasMany(venta::class,'id_usuario','id');
    }
}
