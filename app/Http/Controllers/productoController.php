<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index()
    {

    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $producto = new producto($request->all());
        $producto->save();
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
