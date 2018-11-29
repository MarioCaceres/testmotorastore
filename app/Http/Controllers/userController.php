<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class userController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(100);
        return view('user-admin', compact('users'));
    }
    public function create()
    {
		return view('dashboard');
    }
    public function store(Request $request)
    {
        try{
            $user = new User($request->all());
            $user->password = bcrypt($request->input('password'));
            $user->save();
            return redirect('dashboard')->with('alert', 'Usuario creado exitosamente!');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect('dashboard')->with('alert', 'Error, intente denuevo!');
        }
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('user-admin', compact('user'));
    }
    public function edit()
    {

    }
    public function cambiartipo($id_usuario,$atributo)
    {
        
        $user = User::find($id_usuario);
        $historial = new historialController();
        $historial->registrar("usuario", "modificar tipo","tipo",$user->tipo, $atributo);
        $user->tipo = $atributo;
        $user->save();
        return redirect()->route('user-admin')->with('success', true)->with('message','Usuario modificado exitosamente');

        
    }
    public function activar()
    {
        $user = User::find($id_usuario);
        $historial = new historialController();
        $historial->registrar("usuario", "activar usuario","activo", "1", "0");
        $user->activo =1;
        $user->save();
        return redirect()->route('user-admin')->with('success', true)->with('message','Usuario activado exitosamente');

    }
    public function desactivar()
    {
        $user = User::find($id_usuario);
        $historial = new historialController();
        $historial->registrar("usuario", "bloquear usuario","activo", "0", "1");
        $user->activo =0;
        $user->save();
        return redirect()->route('user-admin')->with('success', true)->with('message','Usuario bloqueado exitosamente');

    }
}
