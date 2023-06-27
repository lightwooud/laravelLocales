<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'name' => 'ALIMENTOS',
                'description' => 'ALIMENTOS',
                'estado' => 'ACTIVO',
            ],
            [
                'name' => 'ROPA Y TEXTILES',
                'description' => 'VESTIMENTA Y TELAS',
                'estado' => 'ACTIVO',
            ],
            [
                'name' => 'DEPORTES',
                'description' => 'ACTIVIDADES FISICAS',
                'estado' => 'ACTIVO',
            ],
        ]);
    }
    
}
