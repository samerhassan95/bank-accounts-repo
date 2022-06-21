<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Currency;
use App\Traits\Uuid;
use Illuminate\Support\Str;
class AccountFactory extends Factory
{
    protected $faker;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $uuid = (string) Str::uuid();
        return [
            'account_number'=>$uuid,
            'balance'=>$this->faker->randomDigit(15),
            'user_id' =>User::all()->random()->id,
            'currency_id' =>Currency::all()->random()->id
        ];
    }
}
