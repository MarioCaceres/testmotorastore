<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function index()
    {

    }
    public function create($nombre,$telefono,$direccion,$correo)
    {
        $cliente = new cliente();
        $cliente->nombre = $nombre;
        $cliente->telefono = $telefono;
        $cliente->direccion = $direccion;
        $cliente->correo = $correo;
        $cliente->save();
        $historial = new historialController();
        $historial->registrar("cliente", "crear proveedor", "-", "-", $proveedor->id);
    }
    public function store()
    {
        $cliente = new cliente($request->all());
        $cliente->save();
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
