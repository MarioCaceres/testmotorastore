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
    public function store($name,$cantidad,$canal,$n_orden,$dateTime,$estado,$c_producto)
    {
        $idUser = Auth::id();
    	$venta = new venta($request->all());
    	$venta->id_usuario = $idUser;
        $venta->fecha = $dateTime;
        $venta->canal = $canal;
        $venta->n_orden = $n_orden;
        $venta->estado = $estado;
    	$venta->save();
        $producto = new productoController();

        while($c_producto >= 0){
            $detalleventa = new detalleventa($request->all());
            $producto = producto::all()->where('name', '=', $name[$c_producto])->first();
            $detalleventa->id_producto = $producto->id;
            $detalleventa->cantidad = $cantidad[$c_producto];
            $detalleventa->save();
            $producto->modificarstock($producto->id, $cantidad[$c_producto]]);
            $c_producto = $c_producto - 1;
        }

    	$historial = new historialController();
      	$historial->registrar("venta", "crear venta", "-", "-", $venta->id);

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
