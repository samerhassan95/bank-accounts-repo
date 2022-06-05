<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transactions;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     AccountSeeder::class,
        // ]);
        Transactions::factory()
        ->count(5)
        // ->for(Account::factory())
        ->create();
    }
}


