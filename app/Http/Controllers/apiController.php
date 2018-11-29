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
    	$venta = venta::all()->where('n_orden', '=', $post['number']);
        
        if($venta != '[]'){
        	echo "Ya se realizo la venta -";
        	echo $venta;
        	return "-";
        }
        $nombre = array();
        $cantidad = array();
        echo $post['line_items'];
        return 1;
		foreach($post->line_items as $item){
			$producto = producto::all()->where('nombre', '=', $item['name'])->first();
        	if($producto == '[]'){
        		//No existe producto
        		echo "No existe producto en la base de datos";
        		return $item['name'];
        	}
        	if($producto->stock < $item['quantity']){
        		//No hay stock suficiente
        		echo "No existe stock en la base de datos";
        		return $item['quantity'];
        	}
        	$nombre[] = $item['name'];
        	$cantidad[] = $item['quantity'];
		}	
        $vent = new ventaController();
        $vent->store($nombre, $cantidad, 1, $post['number'], $post['date_created'], 1, 1, 1);
    }

    public function show()
    {
    }

    public function saveApiData(Request $request)
    {
    	$client = new Client([
    		'base_uri' => 'http://127.0.0.1:8000',
    	]);
        $res = $client->request('GET','/api/');
        $post = json_decode($res->getBody()->getContents());
        dd($post);

    }

}
