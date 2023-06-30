<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactNoteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
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
Route::resource('/companies', CompanyController::class);

Route::resources([
'tags' => TagController::class,
'task' => TaskController::class
]);

Route::resource('/activities', ActivityController::class)->only([
'index','store','edit','update','destroy'
]);
Route::resource('/activities', ActivityController::class)->except([
'index', 'show'
]);
Route::resource('/contacts.notes', ContactNoteController::class);
Route::resource('/contacts.notes', ContactNoteController::class)->shallow();

Route::resource('/activities', ActivityController::class)->names([

'index' => 'activities.all',

'show' => 'activities.view'

]);
Route::resource('/activities', ActivityController::class)->parameters([

'activities' => 'active'

]);
?>

