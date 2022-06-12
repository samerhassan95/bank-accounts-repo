<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Models\User;
use Bouncer;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $user=User::find(1);
    Bouncer::allow($user)->to('update-acc', Account::class);
    Bouncer::allow($user)->to('delete-acc', Account::class);
    Bouncer::allow($user)->to('create-acc', Account::class);

    }
}
