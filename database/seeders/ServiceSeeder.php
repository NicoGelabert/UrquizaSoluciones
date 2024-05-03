<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title' => 'Aires Acondicionados',
            'icon' => 'storage/iconos/aire-acondicionado.svg',
            'smalltext' => 'Instalación y Mantenimiento',
            'description' => 'Instalación y Mantenimiento',
            'image' => 'storage/img/aire-acondicionado.webp'
        ]);
        DB::table('services')->insert([
            'title' => 'Electricidad',
            'icon' => 'storage/iconos/electricidad.svg',
            'smalltext' => 'Instalación y Mantenimiento',
            'description' => 'Instalación y Mantenimiento',
            'image' => 'storage/img/electricidad.webp'
        ]);
        DB::table('services')->insert([
            'title' => 'Fontanería',
            'icon' => 'storage/iconos/fontaneria.svg',
            'smalltext' => 'Instalación y Mantenimiento',
            'description' => 'Instalación y Mantenimiento',
            'image' => 'storage/img/fontaneria.webp'
        ]);
    }
}
