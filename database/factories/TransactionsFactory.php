<?php

namespace Database\Factories;
// use Faker\Generator as Faker;
use App\Models\Account;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionsFactory extends Factory
{
    protected $faker;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount'=>$this->faker->randomDigit(15),
            'send_acc_id' =>Account::all()->random()->id,
            'received_acc_id' =>Account::all()->random()->id,
            'currency_id' =>Currency::all()->random()->id
        ];
    }

}
