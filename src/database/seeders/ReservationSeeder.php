<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation; 
use App\Models\Useru;
use App\Models\Shop;
use Illuminate\Support\Str;



class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = Shop::all();

        foreach ($shops as $shop) {
            Reservation::create([
                'reservation_id' => Str::uuid(),
                'user_id' => Useru::factory()->create()->uuid,
                'shop_id' => $shop->shop_id,
                'reservationDate' => now()->addDays(rand(1, 30))->toDateString(),
                'reservationTime' => now()->addHours(rand(1, 12))->toTimeString(),
                'reservationNum' => rand(1, 10),
            ]);
        }
        //Reservation::factory(10)->create();
    }
}
