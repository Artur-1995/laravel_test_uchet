<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUpdateController extends Controller
{
    public function __invoke(Request $request, Contact $contact)
    {
        $data = $request->validate(
            [
                'name' => 'required|string',
                'last_name' => 'required|integer',
                'transaction_id.*' => 'nullable|numeric|distinct',
            ],
        );

        $contact->updated([
            $data['name'],
            $data['last_name']
        ]);

        $contact->transactions()->sync($data['transaction_id']);

        return view('contacts.show', ['breadcrumbs' => 'contacts.show', 'title' => 'Контакты', 'contact' => $contact]);
    }
}