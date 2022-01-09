<?php

namespace Database\Seeders;

use App\Models\Asociacion;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(AsociacionSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(RoleSeeder::class);

        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ProductoSeeder::class);

        Asociacion::factory(20)->create();
    }
}
