<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use app\historal;
use app\User;
use Illuminate\Support\Facades\Auth;

class historialController extends Controller
{
    public function index()
    {   
        $users = User::all();
        $historial_usuarios = Historial_Usuario::orderBy('fecha','ASC')->paginate(100);
        $transformador= new TransformadorDeDatosController();
        //return view('historial_usuarios.index', compact('historial_usuarios','transformador','users')); Poner la vista historial de usuario
    }
    public function registrar($tabla, $descripcion, $atributo, $antiguo, $nuevo)
    {

        $historial = new Historial_Usuario();
        $dateTime = Carbon::now();
        $historial->id_usuario = Auth::user()->id;
        $historial->fecha = $dateTime;
        $historial->tabla = $tabla;
        $historial->descripcion = $descripcion;
        $historial->atributo = $atributo;
        $historial->estado_anterior = $antiguo;
        $historial->estado_nuevo = $nuevo;
        $historial->save();
    }
}
