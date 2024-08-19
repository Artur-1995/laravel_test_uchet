<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionDeleteController extends Controller
{
    public function __invoke(Transaction $transaction)
    {
        $transaction->delete();
        $transaction->contacts()->detach();
        return redirect(route('transactions.index'));
    }
}