<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccountSeeder::class,
            CurrencySeeder::class,
        ]);
        Transactions::factory()
        ->count(1000)
        ->create();
    
    }
}
