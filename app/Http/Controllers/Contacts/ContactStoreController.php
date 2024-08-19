<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
        ]);
        Contact::firstOrCreate($data);
        $contacts = Contact::all();
        return view('contacts.index', ['breadcrumbs' => 'contacts.index', 'title' => 'Контакты', 'contacts' => $contacts]);
    }
}