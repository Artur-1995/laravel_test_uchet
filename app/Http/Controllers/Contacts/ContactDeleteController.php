<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactDeleteController extends Controller
{
    public function __invoke(Contact $contacts)
    {
        $contacts->transactions()->detach();
        return redirect(route('contacts.index'));
    }
}
