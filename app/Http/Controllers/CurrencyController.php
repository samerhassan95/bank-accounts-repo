<?php

namespace App\Http\Controllers;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
        //list all currencies
    public function show(){
        return response()->json(Currency::all(), 200);
    }
}
