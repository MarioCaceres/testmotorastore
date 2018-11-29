<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\producto;
use App\cliente;
use App\venta;
use App\detalle_venta;


class ventaController extends Controller
{
    public function index()
    {

    }
    public function create()
    {

    }
    public function store($name, $cantidad, $canal, $n_orden, $dateTime, $estado, $id, $id_cliente)
    {
        if($id == ''){
           $idUser = Auth::id(); 
        }
        else{
            $idUser = $id;
        }
        $venta = new venta();
        $venta->canal = $canal;
        $venta->fecha = $dateTime;
        $venta->estado = $estado;
        $venta->n_orden = $n_orden;
        $venta->id_usuario = $idUser;
        $venta->id_cliente = $id_cliente;
        $venta->save();
        $prod = new productoController();

        foreach($name as $nombre){
            foreach($cantidad as $cant){
                $detalleventa = new detalle_venta();
                $producto = producto::all()->where('nombre', '=', $nombre)->first();
                $detalleventa->id_producto = $producto->id;
                $detalleventa->cantidad = $cant;
                $detalleventa->id_venta = $venta->id;
                $detalleventa->save();
                $prod->modificarstock($producto->id, $cant);               
            }
        }
    	$historial = new historialController();
      	$historial->registrar("venta", "crear venta", "-", "-", $venta->id,$idUser);

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
