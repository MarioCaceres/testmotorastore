<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {      
        DB::table('cliente')->insert([
            ['nombre' => 'Antonia A. Daraban Alfambra',
            'telefono' => '98526476',
            'direccion' => 'Boulevard Iehojanan No. 134, Los Lagos',
            'correo' => 'chantoniaa7.@gmail.com',
            ],
            ['nombre' => 'Hilario D. Armijo Lizeaga',
            'telefono' => '72331208',
            'direccion' => 'Calle Santo del Tomasa No. 254, Valparaíso',
            'correo' => 'galizeaga0@gmail.com',
            ],
            ['nombre' => 'Camila Rolon Fernandino',
            'telefono' => '79883644',
            'direccion' => 'Boulevard Hilali No. 516, Metropolitana de Santiago',
            'correo' => 'hefernandino4@gmail.com',
            ],
        ]);

        DB::table('permiso')->insert([
            ['tipo' => 1,
            'tipo' => 2,
            'tipo' => 3,
            'tipo' => 4,
            'tipo' => 5,
            ],
        ]);
        
        DB::table('producto')->insert([
            ['nombre' => 'motora one',
            'precio' => 30000,
            'stock' => 55,
            ],
            ['nombre' => 'motora two',
            'precio' => 50000,
            'stock' => 30,
            ],
            ['nombre' => 'motora three',
            'precio' => 15000,
            'stock' => 100,
            ],
        ]);

        DB::table('usuario')->insert([
            ['name' => 'Administrador',
            'email' => 'pablo.cancino@usach.cl',
            'password' => '12345',
            'id_permiso' => '1',
            ],
        ]);
        
        DB::table('proveedor')->insert([
            ['nombre' => 'Fernando C.',
            'telefono' => '88883644',
            'direccion' => 'Tobalaba No. 354, Metropolitana de Santiago',
            'suministro' => 'Tela',
            'correo' => 'fernando.c@gmail.com',
            ],
        ]);

        DB::table('venta')->insert([
            ['canal' => '1',
            'estado' => 1,
            'fecha' => '2018-06-15',
            'id_cliente' => 1,
            'id_usuario' => 1,
            'n_orden' => 10,
            ],
        ]);

        DB::table('detalle_venta')->insert([
            ['cantidad' => 1,
            'id_producto' => 1,
            'id_venta' => 1,
            ],
        ]);

    }
}
