<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactCreateController extends Controller
{
    public function __invoke()
    {
        return view('contacts.create', ['breadcrumbs' => 'contacts.create', 'title' => 'Создание контакта']);
    }
}
