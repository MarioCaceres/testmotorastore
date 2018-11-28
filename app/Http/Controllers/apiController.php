<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\venta;
use App\producto;

class apiController extends Controller {

    public function index()
    {
        //
    }

	public function store(Request $request)
    {

    	$post = $request;
    	$venta = venta::all()->where('n_orden', '=', $post->number);
        if($venta != NULL){
        	//Ya se realizo la venta
        }

		return $post->line_items[0];
		foreach($post->line_items as $item){
			$producto = producto::all()->where('name', '=', $item->name);
        	if($producto == NULL){
        		//No existe producto
        		return $item->name;
        	}
        	if($producto->stock < $item->quantity){
        		//No hay stock suficiente
        		return $item->quantity;
        	}		
		}	
        
        $vent = new ventaController();
        $vent->store($post->line_items, "1", $post->number, $post->date_create, "1");
    }

    public function show()
    {
        //
    }

    public function saveApiData(Request $request)
    {
    	$client = new Client([
    		'base_uri' => 'http://127.0.0.1:8000',
    	]);
        $res = $client->request('GET','/api/');
        $post = json_decode($res->getBody()->getContents());
        dd($post);
        $api = new apiController();
    	$api->comprobar($post->line_items, $post->number, $post->date_create, "1", "1");
    }


}
