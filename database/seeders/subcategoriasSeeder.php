<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class subcategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('subcategorias')->insert([
            [
                'name' => 'FRUTAS',
                'description' => 'FRUTAS',
                'estado' => 'ACTIVO',
                'categoria' => '1',
            ],
            [
                'name' => 'VERDURAS',
                'description' => 'VERDURAS',
                'estado' => 'ACTIVO',
                'categoria' => '1',
            ],
            [
                'name' => 'GRANOS',
                'description' => 'GRANOS',
                'estado' => 'ACTIVO',
                'categoria' => '1',
            ],
            [
                'name' => 'PARA HOMBRE',
                'description' => 'VESTIMENTA PARA HOMBRE',
                'estado' => 'ACTIVO',
                'categoria' => '2',
            ],
            [
                'name' => 'PARA MUJER',
                'description' => 'VESTIMENTA PARA MUJER',
                'estado' => 'ACTIVO',
                'categoria' => '2',
            ],
            [
                'name' => 'PARA NIÑOS',
                'description' => 'VESTIMENTA PARA NIÑOS',
                'estado' => 'ACTIVO',
                'categoria' => '2',
            ],
            [
                'name' => 'MIXTOS',
                'description' => 'VESTIMENTA',
                'estado' => 'ACTIVO',
                'categoria' => '2',
            ],
            [
                'name' => 'FUTBOL',
                'description' => 'OBJETOS PARA FUTBOL',
                'estado' => 'ACTIVO',
                'categoria' => '3',
            ],
            [
                'name' => 'BALONCESTO',
                'description' => 'OBJETO PARA BALONCESTO',
                'estado' => 'ACTIVO',
                'categoria' => '3',
            ],
            [
                'name' => 'VOLEIBOL',
                'description' => 'OBJETO PARA VOLEIBOL',
                'estado' => 'ACTIVO',
                'categoria' => '3',
            ],
        ]);
    }
    
}
