<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Useru;

class UseruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Useru::factory(10)->create();
    }
}
