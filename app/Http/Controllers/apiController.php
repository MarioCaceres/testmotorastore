<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\venta;

class apiController extends Controller {

    public function saveApiData()
    {
    	$client = new Client([
    		'base_uri' => 'https://jsonplaceholder.typicode.com',
    	]);
        $res = $client->request('GET','posts/1'); 
        $post = json_decode($res->getBody()->getContents());
        //dd($post);
        $post->comprobar($post->line_items, $post->number, $post->date_create, "1", "1");
    }

    public function comprobar($items, $n_orden, $fecha, $canal, $estado, $c_producto){
        
        $venta = venta::all()->where('n_orden', '=', $n_orden);
        if($venta->id != ''){
        	//Ya se realizo la venta
        }
        
		$contador = $c_producto
        while($contador >= 0){
        	$producto = producto::all()->where('name', '=', $items[$contador]->name);
        	if($producto == ''){
        		//No existe producto
        	}
        	if($producto->stock < $items[$contador]->quantity){
        		//No hay stock suficiente
        	}
        }	
        
        $vent = new ventaController();
        $vent->store($items->name, $items->cantidad, $canal, $n_orden, $fecha, $estado, $c_producto);
        }
    }
}