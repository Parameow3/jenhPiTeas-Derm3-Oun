<?php

use Illuminate\Support\Facades\Route;

Route::fallback(function(){
    return "<h1>Sorry, the page you are looking for is not exist.</h1>";
});

Route::get('/',function(){
    return view('welcome');
});
function getContacts(){
    return [
        1 => ['firstname' => 'Sok', 'lastname' => 'Dara', 'email'=>'dara@abc.com','phone'=>'092 293 234','address'=>'Phnom Penh', 'company'=>'ABC'],
        2 => ['firstname' => 'Sok', 'lastname' => 'Pisey', 'email'=>'pisey@abc.com','phone'=>'092 234 123','address'=>'Phnom Penh', 'company'=>'ABC'],
        3 => ['firstname' => 'Chan', 'lastname' => 'Ratha', 'email'=>'ratha@xyz.com','phone'=>'092 234 233','address'=>'Phnom Penh', 'company'=>'XYZ'],
        4 => ['firstname' => 'Kos', 'lastname' => 'Borey', 'email'=>'borey@mno.com','phone'=>'092 234 343','address'=>'Phnom Penh', 'company'=>'MNO'],
    ];
}
Route::get('/contacts', function () {
    $contacts = getContacts();
    return view('contacts.index',compact('contacts'));
})->name('contacts.index');

Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    $contacts = getContacts();
    abort_if(!isset($contacts[$id]),404);
    $contact = $contacts[$id];
    return view('contacts.show')->with('contact',$contact);
})->name('contacts.show');

?>
