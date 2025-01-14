<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Useru;
use App\Models\Reservation;
use App\Models\Shop;



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
        UseruSeeder::class,
        ShopSeeder::class,
        ReservationSeeder::class,
        ]);
        
    }
}
