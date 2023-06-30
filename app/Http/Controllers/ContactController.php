<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Repositories\CompanyRepository;

class ContactController extends Controller
{
    //Index
    public function index(CompanyRepository $company)
    {
        $contacts = Contact::where(function ($query) {
            if ($companyId = request()->query("company_id")) {
                $query->where("company_id", $companyId);
            }
        })->get();

        $companies = json_decode(json_encode($company->company_data()));
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
        $contact = Contact::findOrFail($id);
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

}
