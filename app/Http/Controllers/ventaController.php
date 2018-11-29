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
        $ventas = venta::all();
        $detalles = $ventas = detalle_venta::all();
        return view('sales',compact('ventas','detalles'));
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
        $lleno = 0;
        return view('new-sale',compact('productos','cliente','texto_boton','id_cliente_actual','carrito','lleno'))->with('id_cliente',$id_cliente);
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
        $lleno = 1;
        
        session()->put('carro_compras',$carrito);
        session()->put('cliente_sesion',$id_cliente);
        return view('new-sale',compact('productos','cliente','texto_boton','id_cliente_actual','carrito','lleno'))->with('id_cliente',$id_cliente);
    }

    public function saveSale(){
        
        $carrito = session()->get('carro_compras');
        $id_cliente = session()->get('cliente_sesion');
        //dd($carrito);
        $venta = new venta();
        $venta->id_usuario = 1;
        $venta->id_cliente = $id_cliente;
        $venta->estado = 1;
        $venta->fecha = date("Y/m/d");
        $venta->canal = 1;
        $venta->n_orden = 0;
        $venta->save();

        $id_venta = $venta->id;
        foreach ($carrito as $key => $item) {
            $detalleventa = new detalle_venta();
            $detalleventa->id_producto= $key;
            $detalleventa->id_venta=$id_venta;
            $detalleventa->cantidad=$item->cantidad;
            $detalleventa->save();

            $prod = producto::find($key);
            $prod->stock = $prod->stock - $item->cantidad;
            $prod->save();
        }
        return view('sales');

    }
}
