<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\historial;

class historialController extends Controller
{
    public function index()
    {   
        $users = User::all();
        $historial_usuarios = historial::orderBy('fecha','ASC')->paginate(100);
        return view('recent-activity', compact('historial_usuarios','users'));
    }
    public function registrar($tabla, $descripcion, $atributo, $antiguo, $nuevo, $id)
    {
        echo $id;
        return 0;
        if($id == '[]'){
           $idUser = 1; 
        }
        else{
            $idUser = $id;
        }
        $historial = new historial();
        $dateTime = Carbon::now();
        $historial->fecha = $dateTime;
        $historial->descripcion = $descripcion;
        $historial->estado_anterior = $antiguo;
        $historial->estado_nuevo = $nuevo;
        $historial->tabla = $tabla;
        $historial->atributo = $atributo;
        $historial->id_usuario = $idUser;
        $historial->save();
    }
}
