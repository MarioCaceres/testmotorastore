<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index()
    {

    }
    public function create($nombre,$stock,$precio)
    {
        $producto = new producto();
        $producto->nombre = $nombre;
        $producto->stock = $stock;
        $producto->precio = $precio;
        $producto->save();
        $historial = new historialController();
        $historial->registrar("producto", "crear producto", "-", "-", $producto->id);
    }
    public function store(Request $request)
    {
        $producto = new producto($request->all());
        $producto->save();
    }
    public function show()
    {

    }
    public function editarPrecio($id_producto,$atributo)
    {
        $producto = producto::find($id_producto);
        $historial = new historialController();
        $historial->registrar("producto", "modificar precio","precio",$producto->precio, $atributo);
        $producto->precio = $atributo;
        $producto->save();
        return redirect()->route('users.index')->with('success', true)->with('message','Producto modificado exitosamente');
    }
    public function modificarstock($id_producto,$atributo)
    {
        $producto = producto::find($id_producto);
        $historial = new historialController();
        $historial->registrar("producto", "modificar stock","stock",$producto->stock, $atributo);
        $producto->stock = $producto->stock - $atributo;
        $producto->save();
        if($producto->stock <= 5){
            $recipiente = User::find($elegidos->id_usuario);
            $recipiente->notify(new EnvioCorreo($e));
        }
        return redirect()->route('users.index')->with('success', true)->with('message','Producto modificado exitosamente');
    }
    public function editarNombre($id_producto,$atributo)
    {
        $producto = producto::find($id_producto);
        $historial = new historialController();
        $historial->registrar("producto", "modificar nombre","nombre",$producto->nombre, $atributo);
        $producto->nombre = $atributo;
        $producto->save();
        return redirect()->route('users.index')->with('success', true)->with('message','Producto modificado exitosamente');
    }
    public function destroy()
    {

    }
}
