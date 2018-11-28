<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class historialController extends Controller
{
    public function index()
    {   
        $users = User::all();
        $historial_usuarios = historial::orderBy('fecha','ASC')->paginate(100);
        return view('recent-activity', compact('historial_usuarios','users'));
    }
    public function registrar($tabla, $descripcion, $atributo, $antiguo, $nuevo)
    {

        $historial = new historial();
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
