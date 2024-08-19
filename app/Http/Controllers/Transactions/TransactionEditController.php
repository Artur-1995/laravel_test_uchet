<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionEditController extends Controller
{
    public function __invoke(int $id)
    {
        $transaction = Transaction::find($id);
        $contacts = Contact::all();
        return view('transactions.edit', ['breadcrumbs' => 'transactions.edit', 'title' => 'Редактирование сделки', 'transaction' => $transaction, 'contacts' => $contacts]);
    }
}
