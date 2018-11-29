<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\producto;
use App\User;

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
        $historial->registrar("producto", "crear producto", "-", "-", $producto->id,Auth::id());
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
        $historial->registrar("producto", "modificar precio","precio",$producto->precio, $atributo,Auth::id());
        $producto->precio = $atributo;
        $producto->save();
        return redirect()->route('users.index')->with('success', true)->with('message','Producto modificado exitosamente');
    }
    public function modificarstock($id_producto,$atributo)
    {
        $producto = producto::find($id_producto);
        $producto->stock = $producto->stock - $atributo;
        $producto->save();
        $historial = new historialController();
        $historial->registrar("producto", "modificar stock","stock",$producto->stock, $atributo,Auth::id());
        if($producto->stock <= 5){
            $correo = User::find(1)->first();
            $correo->notify(new EnvioCorreo($producto));
        }
        
        return redirect()->route('dashboard')->with('success', true)->with('message','Producto modificado exitosamente');
    }
    public function editarNombre($id_producto,$atributo)
    {
        $producto = producto::find($id_producto);
        $historial = new historialController();
        $historial->registrar("producto", "modificar nombre","nombre",$producto->nombre, $atributo,Auth::id());
        $producto->nombre = $atributo;
        $producto->save();
        return redirect()->route('dashboard')->with('success', true)->with('message','Producto modificado exitosamente');
    }
    public function destroy()
    {

    }
}
