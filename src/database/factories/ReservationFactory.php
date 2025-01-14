<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Useru;
use App\Models\Shop;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reservation_id' => Str::uuid(),
            'user_id' => Useru::factory()->create()->uuid,
            'shop_id' => Shop::factory()->create()->shop_id,
            

            'reservationDate' => $this->faker->date(),
            'reservationTime' => $this->faker->time(),
            'reservationNum' => $this->faker->numberBetween(1, 10),
            
        ];
    }
}
