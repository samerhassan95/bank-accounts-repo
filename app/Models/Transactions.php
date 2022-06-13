<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Currency;
use App\Models\Account;

class Transactions extends Model
{
    protected $fillable = [
        'amount',
    ];
    use HasFactory;



public function senderAccount()
{
    return $this->belongsTo(Account::class,'foreign_key','send_acc_id');
}

public function receiverAccount()
{
    return $this->belongsTo(Account::class,'foreign_key','received_acc_id');
}

public function currency()
{
    return $this->hasOne(Currency::class);
}

}
