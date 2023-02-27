<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);
        return [
            // 'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 2000),
            'status' => $status,
            'bill_dated' => $this->faker->dateTimeThisDecade(),
            'paid_dated' => $status == 'P' ? $this->faker->dateTimeThisDecade() : NULL,
        ];
    }
}
