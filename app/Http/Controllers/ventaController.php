<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventaController extends Controller
{
    public function index()
    {

    }
    public function create()
    {

    }
    public function store(Request $request)
    {
    	$idUser = Auth::id();
    	$venta = new venta($request->all());
    	$venta->id_usuario = $idUser;
    	$venta->save();

    	$historial = new historialController();
      	$historial->registrar("venta", "crear", "canal", "-", $catastrofe->canal);
      	$historial->registrar("venta", "crear", "fecha", "-", $catastrofe->fecha);
    }
    public function show()
    {

    }
    public function update($id_usuario)
    {
		if()
		$recipiente = User::find($elegidos->id_usuario);
        $recipiente->notify(new EnvioCorreo($e));
    }
    public function destroy()
    {

    }
}
