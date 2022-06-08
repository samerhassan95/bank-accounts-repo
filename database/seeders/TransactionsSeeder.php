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
        Transactions::factory()->count(5)->create();
    }
}


