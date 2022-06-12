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
    Bouncer::allow($user)->to('edit-acc', Account::class);
    Bouncer::allow($user)->to('view-acc', Account::class);


    }
}
