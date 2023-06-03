<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    //Index
    public function index()
    {
        $contacts = $this->getContacts();
        $companies = json_decode(json_encode($this->getCompanies()));
        return view('contacts.index', ['contacts' => $contacts, 'companies' => $companies]);
    }

    //Create
    public function create()
    {
        return view('contacts.create');
    }

    //Show
    public function show($id)
    {
        $contacts = $this->getContacts();
        abort_if(!isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contacts.show')->with('contact', $contact);
    }

    protected function getContacts()
    {
        return [
            1 => ['firstname' => 'Sok', 'lastname' => 'Dara', 'email' => 'dara@abc.com', 'phone' => '092 293 234', 'address' => 'Phnom Penh', 'company' => 'ABC'],
            2 => ['firstname' => 'Sok', 'lastname' => 'Pisey', 'email' => 'pisey@abc.com', 'phone' => '092 234 123', 'address' => 'Phnom Penh', 'company' => 'ABC'],
            3 => ['firstname' => 'Chan', 'lastname' => 'Ratha', 'email' => 'ratha@xyz.com', 'phone' => '092 234 233', 'address' => 'Phnom Penh', 'company' => 'XYZ'],
            4 => ['firstname' => 'Kos', 'lastname' => 'Borey', 'email' => 'borey@mno.com', 'phone' => '092 234 343', 'address' => 'Phnom Penh', 'company' => 'MNO'],
        ];
    }

    protected function getCompanies()
    {
        return [
            1 => ['name' => 'Company 1'],
            2 => ['name' => 'Company 2'],
        ];
    }
}
