<?php

namespace Database\Seeders;

use App\Models\WorkLayout;
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
        $this->call([
            HomeLayoutSeeder::class,
            AboutusLayoutSeeder::class,
            WorkLayout::class,
        ]);
    }
}
