<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\cliente;

class ventaController extends Controller
{
    public function index()
    {

    }
    public function create()
    {

    }
    public function store($items,$canal,$n_orden,$dateTime,$estado)
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

        foreach($name as $nombre){
            foreach($cantidad as $cant){
                $detalleventa = new detalleventa($request->all());
                $producto = producto::all()->where('name', '=', $nombre)->first();
                $detalleventa->id_producto = $producto->id;
                $detalleventa->cantidad = $cant;
                $detalleventa->save();
                $producto->modificarstock($producto->id, $cant);               
            }
        }

    	$historial = new historialController();
      	$historial->registrar("venta", "crear venta", "-", "-", $venta->id);

    }
    public function show()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }

    public function new($id_cliente){
        $carrito =[];
        $producto = new \stdClass();
        $producto->nombre="";
        $producto->cantidad="";
        $producto->precio="";
        $producto->total="";
        $carrito[0] = $producto;

        $id_cliente_actual = $id_cliente;
        $cliente = cliente::find($id_cliente);
        $productos = producto::all();
        $texto_boton = "Agregar Producto(s)";
        return view('new-sale',compact('productos','cliente','texto_boton','id_cliente_actual','carrito'))->with('id_cliente',$id_cliente);
    }

    public function addItem($id_cliente,Request $request){
        $numeros = $request->input('numeros');
        $check = $request->input('check');
        $productos = producto::all();
        $cliente = cliente::find($id_cliente);
        $id_cliente_actual = $id_cliente;
        $carrito = [];
        foreach ($check as $key => $item) {
            if ($item == 1) {
                $prod = producto::find($key);
                $producto = new \stdClass();
                $producto->nombre= $prod->nombre;
                $producto->cantidad= $numeros[$key];
                $producto->precio=$prod->precio;
                $producto->total=$prod->precio*$numeros[$key];
                $carrito[$key] = $producto;
            }
        }
        $texto_boton = "Modificar Producto(s)";
        return view('new-sale',compact('productos','cliente','texto_boton','id_cliente_actual','carrito'))->with('id_cliente',$id_cliente);
    }
}
