<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

// TODO-3-4 (DONE) Créer le seeder "BookSeeder" --> php artisan...
// TODO-3-5 (DONE) Rajouter quelques livres
// TODO-3-7 (DONE) Exécuter le seeder --> php artisan...

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();

        \App\Models\User::factory(10)->create();
        //$this->call(BookSeeder, false, );
        // TODO-3-6 Ajouter le seeder "BookSeeder" ici en utilisant "$this->call(...)"
    }
}
