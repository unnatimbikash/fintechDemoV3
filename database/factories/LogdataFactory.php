<?php

namespace Database\Factories;

use App\Models\LogdataModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LogdataModel>
 */
class LogdataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = LogdataModel::class;

    public function definition(): array
    {

        return [
            'user_id' => mt_rand(1, 100), // Generate a random user_id
            'ip_address' => $this->faker->ipv4,
            'user_agent' => $this->faker->userAgent,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
            'gps_location' => $this->faker->latitude() . ', ' . $this->faker->longitude(),
            'ip_location' => $this->faker->city . ', ' . $this->faker->country,
            'device_id' => Str::random(10),
        ];
    }
}
