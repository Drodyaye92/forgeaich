<?php

namespace Database\Seeders;
namespace Models\App;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * // \App\Models\User::factory(10)->create();
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
    }
}
