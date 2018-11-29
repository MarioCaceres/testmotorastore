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
            'stock' => 10,
            ],
        ]);
        
        DB::table('proveedor')->insert([
            ['nombre' => 'motora one',
            'precio' => 30000,
            'stock' => 10,
            ],
        ]); 

    }
}
