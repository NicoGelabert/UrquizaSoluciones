<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nicolás',
            'email' => 'nico.gelabert@gmail.com',
            'password' => bcrypt('WsBvoYkux81inO1'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);
        User::create([
            'name' => 'Matías',
            'email' => 'elmatimaldonado@gmail.com',
            'password' => bcrypt('Drek2362'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);
    }
}
