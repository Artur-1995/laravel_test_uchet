<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionIndexController extends Controller
{
    public function __invoke()
    {
        $transactions = Transaction::all();
        return view('transactions.index', ['breadcrumbs' => 'transactions.index', 'title' => 'Сделки', 'transactions' => $transactions]);
    }
}
