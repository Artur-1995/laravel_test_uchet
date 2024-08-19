<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ContactEditController extends Controller
{
    public function __invoke(Contact $contact)
    {
        $transactions = Transaction::all();

        return view('contacts.edit', ['breadcrumbs' => 'contacts.edit', 'title' => 'Редактирование', 'contact' => $contact, 'transactions' => $transactions]);
    }
}