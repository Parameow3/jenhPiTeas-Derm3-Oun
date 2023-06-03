<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::fallback(function(){
    return "<h1>Sorry, the page you are looking for is not exist.</h1>";
});

Route::get('/',function(){
    return view('welcome');
});
Route::get('/contacts', [ContactController::class,'index']) -> name('contacts.index');
Route::get('/contacts/create', [ContactController::class,'create']) -> name('contacts.create');
Route::get('/contacts/{id}', [ContactController::class,'show']) -> name('contacts.show');
?>
