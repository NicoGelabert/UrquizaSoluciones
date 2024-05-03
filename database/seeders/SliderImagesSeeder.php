<?php

namespace Database\Seeders;

use App\Models\SliderImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slider_images')->insert([
            'image' => 'storage/img/aire-acondicionado.webp',
            'smalltext' => 'Instalación y Mantenimiento',
            'headline' => 'Aires Acondicionados',
            'description' => 'Instalación y Mantenimiento',
            'link' => '#',
            'icon' => 'storage/iconos/aire-acondicionado.svg'
        ]);
        DB::table('slider_images')->insert([
            'image' => 'storage/img/electricidad.webp',
            'smalltext' => 'Instalación y Mantenimiento',
            'headline' => 'Electricidad',
            'description' => 'Instalación y Mantenimiento',
            'link' => '#',
            'icon' => 'storage/iconos/electricidad.svg'
        ]);
        DB::table('slider_images')->insert([
            'image' => 'storage/img/fontaneria.webp',
            'smalltext' => 'Instalación y Mantenimiento',
            'headline' => 'Fontaneria',
            'description' => 'Instalación y Mantenimiento',
            'link' => '#',
            'icon' => 'storage/iconos/fontaneria.svg'
        ]);
    }
}
