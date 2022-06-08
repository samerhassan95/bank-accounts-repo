<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
