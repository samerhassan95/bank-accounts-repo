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
        // User::create(['name' => 'samer',
        // 'email' => 'samer1@gmail.com',
        // 'email_verified_at' => now(),
        // 'password' => Hash::make('1234567'), // password
        // 'remember_token' => Str::random(10),])
        User::factory()->count(10)->create();
    }
}
