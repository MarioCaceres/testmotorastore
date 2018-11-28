<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proveedorController extends Controller
{
    public function index()
    {

    }
    public function create($nombre,$telefono,$direccion,$suministro,$correo)
    {
        
        $proveedor = new proveedor();
        $proveedor->nombre = $nombre;
        $proveedor->telefono = $telefono;
        $proveedor->direccion = $direccion;
        $proveedor->suministro = $suministro;
        $proveedor->correo = $correo;
        $proveedor->save();
        $historial = new historialController();
        $historial->registrar("proveedor", "crear proveedor", "-", "-", $proveedor->id);
    }
    public function store()
    {
        $proveedor = new proveedor($request->all());
        $proveedor->save();
    }
    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
