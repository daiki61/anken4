<?php

namespace Database\Factories;

use App\Models\Useru;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UseruFactory extends Factory
{
    protected $model = Useru::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password'=> Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),


        ];
    }
}
