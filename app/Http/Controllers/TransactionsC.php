<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transactionsM;
use App\Http\Resources\TransactionsR;

class TransactionsC extends Controller
{
    public function index(){
        $transactions = transactionsM::all();
       // return response()->json($posts);
       return TransactionsR::collection($transactions);
    }

    public function detail($id){
        $transactions = transactionsM::findOrFail($id);
        return new TransactionsR($transactions);
    }
}
