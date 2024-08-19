<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionShowController extends Controller
{
    public function __invoke(Transaction $transaction)
    {
        return view('transactions.show', ['breadcrumbs' => 'transactions.show', 'title' => 'Сделки', 'transaction' => $transaction]);
    }
}