<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
// use Database\Factory\Account;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     AccountSeeder::class
        // ]);
        User::factory()
        ->count(1000)
        // ->has(Account::factory()->count(3))
        ->create();
    }
}
