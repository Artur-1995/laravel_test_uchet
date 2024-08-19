<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactShowController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return view('contacts.show', ['breadcrumbs' => 'contacts.show', 'title' => 'Просмотр контакта', 'contact' => $contact]);
    }
}