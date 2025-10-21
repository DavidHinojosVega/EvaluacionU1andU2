<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {//aqui se manda a llamar es la ruta para llegar a los seeders
        $this->call(UsersSeeder::class);
        $this->call(DevicesSeeder::class);
    }
}
