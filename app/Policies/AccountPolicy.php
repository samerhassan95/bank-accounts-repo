<?php

namespace App\Policies;
use App\Models\Account;
use App\Models\User;
use Bouncer;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function update(User $user, Account $account)
    {
        // dd($user->id, $account->user_id, $user->can('edit-acc',Account::class));
        return $user->id == $account->user_id
             && $user->can('edit-acc',Account::class);
        }


    public function delete(User $user, Account $account)
    {

        return $user->id == $account->user_id
             && $user->can('edit-acc',Account::class);


    }

    public function create(User $user, Account $account)
    {

        return $user->id == $account->user_id
             && $user->can('edit-acc',Account::class);

    }
}
