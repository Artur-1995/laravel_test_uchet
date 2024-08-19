<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\ContactTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionUpdateController extends Controller
{
    public function __invoke(Request $request, Transaction $transaction)
    {
        $data = $request->validate(
            [
                'name' => 'required|string',
                'amount' => 'required|integer',
                'contact_id.*' => 'nullable|numeric|distinct',
            ],
        );

        $transaction->updated([
            $data['name'],
            $data['amount']
        ]);

        $transaction->contacts()->sync($data['contact_id']);

        return view('transactions.show', ['breadcrumbs' => 'transactions.show', 'title' => 'Сделки', 'transaction' => $transaction]);
    }
}