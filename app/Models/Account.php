<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'account_number',
        'balance'
    ];
    use HasFactory;

    public function user()
{
    return $this->belongsTo(Users::class);
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
