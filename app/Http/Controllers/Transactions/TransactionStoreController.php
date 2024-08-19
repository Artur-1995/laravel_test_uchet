<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionStoreController extends Controller
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

        $transaction = Transaction::firstOrCreate([
            'name' => $data['name'],
            'amount' => $data['amount']
        ]);

        if (!empty($data['contact_id'])) {
            foreach ($data['contact_id'] as $contact_id) {
                $transaction = ContactTransaction::firstOrCreate([
                    'contact_id' => $contact_id,
                    'transaction_id' => $transaction->id,
                ]);
            }
        }

        return redirect(route('transactions.index'));
    }
}