<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionCreateController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        return view('transactions.create', ['breadcrumbs' => 'transactions.create', 'title' => 'Создание сделки', 'contacts' => $contacts]);
    }
}
