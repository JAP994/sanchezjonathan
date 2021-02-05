<?php

namespace Database\Seeders;

use App\Models\UsuarioRol;
use Illuminate\Database\Seeder;

class UsuarioRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuarioRol::factory(10)->create();
        
    }
}
