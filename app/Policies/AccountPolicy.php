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
//update
    public function update(User $user, Account $account)
    {
        return $user->id == $account->user_id
             && $user->can('update-acc',Account::class);
    }



//delete
    public function delete(User $user, Account $account)
    {
        return $user->id == $account->user_id
             && $user->can('delete-acc',Account::class);
    }


//create
    public function create(User $user)
    {
        // return $user->id == $account->user_id
        //      &&
             return$user->can('create-acc',Account::class);
    }
}
