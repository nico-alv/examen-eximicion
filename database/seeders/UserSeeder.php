<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'rut' => '123456789',
            'nombre' => 'John Doe',
        ]);
        User::create([
            'rut' => '20936459K',
            'nombre' => 'Nicolas Alvarez',
        ]);
    }
}
