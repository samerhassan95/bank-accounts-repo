<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transactions;

class Currency extends Model
{
    protected $fillable = [
        'name',
        'rate',
        'active'
    ];
    use HasFactory;
    public function Transactions()
{
    return $this->hasMany(Transactions::class);
}
}
