<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactIndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();

        return view('contacts.index', ['breadcrumbs' => 'contacts.index', 'title' => 'Контакты', 'contacts' => $contacts]);
    }
}