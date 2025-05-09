<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Categoria
        $this->call([
            CategoriaSeeder::class,
            ProdutoSeeder::class,
            UserSeeder::class,
        ]);
    }
}
