<?php

namespace Database\Factories;
use App\Models\CustomerProfile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerProfile>
 */
class CustomerProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = CustomerProfile::class;

    public function definition(): array
    {
        return [
            'cus_name' => $this->faker->name(),
            'cus_add' => $this->faker->address(),
            'cus_city' => $this->faker->city(),
            'cus_state' => $this->faker->state(),
            'cus_postcode' => $this->faker->postcode(),
            'cus_country' => $this->faker->country(),
            'cus_phone' => $this->faker->phoneNumber(),
            'cus_fax' => $this->faker->phoneNumber(),

            'ship_name' => $this->faker->name(),
            'ship_add' => $this->faker->address(),
            'ship_city' => $this->faker->city(),
            'ship_state' => $this->faker->state(),
            'ship_postcode' => $this->faker->postcode(),
            'ship_country' => $this->faker->country(),
            'ship_phone' => $this->faker->phoneNumber(),

            // Connect to existing User
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
