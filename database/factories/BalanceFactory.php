<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Balance>
 */
class BalanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'account_balance' => fake()->randomFloat(2, 50000, 70000),
            'loan_balance' => fake()->randomFloat(2, 50000, 70000),
            'fixed_deposit_balance' => fake()->randomFloat(2, 50000, 70000),
            'total_transfer_funds' => fake()->randomFloat(2, 50000, 70000),
            'total_loan_funds' => fake()->randomFloat(2, 50000, 70000),
            'total_fixed_deposit_funds' => fake()->randomFloat(2, 50000, 70000),
        ];
    }
}
