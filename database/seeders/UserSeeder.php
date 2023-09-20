<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    DB::table('users')->insert([
        'name' => 'Samara',
        'email' => 'samara@samara.com.br',
        'password' => Hash::make('123456789'),
        'perfil'=> 'admin'
    ]);

    DB::table('users')->insert([
        'name' => 'Eduardo',
        'email' => 'eduardo@eduardo.com.br',
        'password' => Hash::make('123456789'),
        'perfil'=> 'admin'
    ]);
    DB::table('users')->insert([
        'name' => 'Lucas',
        'email' => 'lucas@lucas.com.br',
        'password' => Hash::make('123456789'),
        'perfil'=> 'admin'
    ]);

    DB::table('users')->insert([
        'name' => 'Pedro',
        'email' => 'pedro@pedro.com.br',
        'password' => Hash::make('123456789'),
        'perfil'=> 'admin'
    ]);
    DB::table('users')->insert([
        'name' => 'Taissa',
        'email' => 'taissa@taissa.com.br',
        'password' => Hash::make('123456789'),
        'perfil'=> 'admin'
    ]);



    }
}
