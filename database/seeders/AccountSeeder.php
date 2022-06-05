<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     CurrencySeeder::class
        // ]);
        Account::factory()
        ->count(3)
        // ->for(User::factory())
        // ->has(Currency::factory()->count(1))
        // ->has(Transactions::factory()->count(5))
        ->create();
    }
}

