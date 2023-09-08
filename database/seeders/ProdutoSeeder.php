<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'Top_01',
            'preco' => 15.99,
            'quantidade' => 65,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Saia_01',
            'preco' => 19.99,
            'quantidade' => 30,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Legging_01',
            'preco' => 25.99,
            'quantidade' => 100,
        ]);
    }
}
