<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Currency;
use App\Models\Transactions;

class Account extends Model
{
    protected $fillable = [
        'account_number',
        'balance',
        'user_id',
        'currency_id'
    ];
    use HasFactory;

    public function user()
{
    return $this->belongsTo(User::class);
}

public function hasCurrency()
{
    return $this->hasOne(Currency::class);
}

public function makeTransactions()
{
    return $this->hasMany(Transactions::class);
}
}
