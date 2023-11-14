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
        $this->call([
            clienteSeeder::class
        ]);

        $this->call([
            profissionalSeeder::class
        ]);

        $this->call([
            servicoSeeder::class
        ]);
    }
}
