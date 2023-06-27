<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\Vendedor::factory(10)->create();
        \App\Models\Auto::factory(10)->create([
            'marca' => 'Cherry',
            'modelo' => 'QQ',
            'color' => 'Rojo',
            'vendedor_id' => 1,
        ]);
        \App\Models\Auto::factory(5)->create([
            'marca' => 'Fiat',
            'modelo' => 'Uno',
            'color' => 'Azul',
            'vendedor_id' => 2,
        ]);

        \App\Models\Auto::factory(10)->create([
            'marca' => 'Volkswagen',
            'modelo' => 'Fusca',
            'color' => 'Blanco',
            'vendedor_id' => 3,
            'puertas' => 2
        ]);
    }
}
