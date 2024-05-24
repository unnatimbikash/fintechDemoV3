<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agentcode' => $this->faker->unique()->uuid(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => $this->faker->phoneNumber(),
            'designation' => $this->faker->jobTitle(),
            'dob' => $this->faker->date(),
            'aadharmobile' => $this->faker->phoneNumber(),
            'password' => Hash::make('password'), // password
            'otpverify' => $this->faker->boolean(),
            'otpresend' => $this->faker->randomNumber(6),
            'mainwallet' => $this->faker->randomFloat(2, 0, 10000),
            'aepsbalance' => $this->faker->randomFloat(2, 0, 10000),
            'microatmbalance' => $this->faker->randomFloat(2, 0, 10000),
            'lockedamount' => $this->faker->randomFloat(2, 0, 10000),
            'role_id' => $this->faker->numberBetween(1, 5),
            'parent_id' =>$this->faker->numberBetween(1, 100),
            'company_id' => $this->faker->numberBetween(1, 10),
            'scheme_id' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(['active','block']),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'pincode' => $this->faker->postcode(),
            'shopname' => $this->faker->company(),
            'pancard' => $this->faker->randomNumber(),
            'aadharcard' => $this->faker->randomNumber(),
            'kyc' => $this->faker->randomElement(['pending','submitted','verified','rejected']),
            'remark' => $this->faker->sentence(),
            'resetpwd' =>  $this->faker->randomElement(['default','changed']),
            'uid' => $this->faker->uuid(),
            'device_id' => $this->faker->uuid(),
            'permission_change' => $this->faker->boolean(),
            'via' => $this->faker->randomElement(['web', 'app']),
            'daily_limit' => $this->faker->randomFloat(2, 0, 1000),
            'month_limit' => $this->faker->randomFloat(2, 0, 10000),
            'step' => $this->faker->numberBetween(0, 5),
            'rejected_step' => $this->faker->optional()->numberBetween(1, 5),
            'rejected_remarks' => $this->faker->optional()->sentence(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
