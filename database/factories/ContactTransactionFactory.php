<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactTransaction>
 */
class ContactTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'contact_id' => fake()->numberBetween(1, Contact::count()),
            'transaction_id' => fake()->numberBetween(1, Transaction::count()),
        ];
    }
}