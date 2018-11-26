<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class userController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(100);
        return view('users.index', compact('users'));
    }
    public function create()
    {
		return view('users.create');
    }
    public function store(Request $request)
    {
        try{
            $user = new User($request->all());
            $user->password = bcrypt($request->input('password'));
            $user->save();
            return redirect('')->with('alert', 'Usuario creado exitosamente!');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect('')->with('alert', 'Error, intente denuevo!');
        }
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
    public function edit()
    {

    }
    public function update()
    {
        User::find($id)->update($request->all());
        return redirect()->route('users.index')->with('success', true)->with('message','Usuario modificado exitosamente');
    }
    public function destroy()
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success', true)->with('message','Usuario bloqueado exitosamente');
    }
}
