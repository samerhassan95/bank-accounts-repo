<?php

namespace Database\Factories;
// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurrencyFactory extends Factory
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
            'name'=>$this->faker->randomElement(['USD','EURO','GBP','AUD','NZD','CHF','CNF','KUD','EGP','UAD']),
            'active' =>$this->faker->boolean(),
            'rate'=>$this->faker->randomFloat(2, 50, 1000)
        ];
    }
}
