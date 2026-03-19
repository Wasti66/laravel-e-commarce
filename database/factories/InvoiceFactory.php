<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Invoice::class;
    public function definition(): array
    {
        return [
            'total' => $this->faker->numberBetween(1000, 10000),
            'discount' => $this->faker->numberBetween(0, 500),
            'vat' => $this->faker->numberBetween(50, 200),
            'payble' => $this->faker->numberBetween(500, 9000),

            'cus_details' => $this->faker->text(100),
            'ship_details' => $this->faker->text(100),

            'shipping_method' => $this->faker->randomElement(['Courier', 'Pickup', 'Home Delivery']),

            'tran_id' => $this->faker->uuid(),

            'payment_status' => $this->faker->randomElement(['Pending', 'Paid', 'Failed']),

            'delevary_status' => $this->faker->randomElement(['Pending', 'Shipped', 'Delivered']),

            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
