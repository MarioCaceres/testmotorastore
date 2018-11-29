<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\cliente;
use Validator;
use Session;

class clienteController extends Controller
{
    public function index()
    {
        $clientes = cliente::all();
        return view('new-sale-client',compact('clientes'));
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
        //dd($request);

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nombre'       => 'required',
            'telefono' => 'required|numeric',
            'direccion'      => 'required',
            'correo'      => 'required|email',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->route('clienteController.clients')
                                ->withErrors($validator)
                                ->withInput();
        } else {
            // store
            //dd($request->input('nombre'));
            $cli = new cliente();
            $cli->nombre       = $request->input('nombre');
            $cli->telefono       = $request->input('telefono');
            $cli->direccion       = $request->input('direccion');
            $cli->correo       = $request->input('correo');
            $cli->save();

            // redirect
            Session::flash('message', 'Cliente creado con éxito!');
            return redirect('dashboard')->route('clienteController.clients');
        }
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
