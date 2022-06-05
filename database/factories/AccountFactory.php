<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Currency;
class AccountFactory extends Factory
{
    protected $faker;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    // $factory->define(Account::class, function (Faker $faker)
    {
        // dd(User::inRandomOrder()->first()->id);
        return [
            'account_number'=>$this->faker->unique->numberBetween(1,1000),
            'balance'=>$this->faker->randomDigit(15),
            'user_id' =>User::all()->random()->id,
            'currency_id' =>Currency::all()->random()->id
        ];
    }
}
