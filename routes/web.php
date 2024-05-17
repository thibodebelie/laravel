<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ActiviteitController;
 

Route::get('/', function () {
    return view('home');
});

Route::get('/activiteiten', function () {
    return view('activiteiten');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/documenten', function () {
    return view('documenten');
});

Route::get('/hoofdleiding', function () {
    return view('hoofdleiding');
});

Route::get('/inschrijven', function () {
    return view('inschrijven');
});


Route::get('/leiding', function () {
    return view('leiding');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/maxiMin', function () {
    return view('maxiMin');
});

Route::get('/miniMin', function () {
    return view('miniMin');
});
Route::get('/toevoegen', function () {
    return view('toevoegen');
});
Route::get('/tussers', function () {
    return view('tussers');
});
Route::get('/vragen', function () {
    return view('vragen');
});




// Kamp
Route::get('/show-pdf-kamp', function () {
    $pathToFile = public_path('img/KLJ KAMP pdf.pdf');
    return response()->file($pathToFile);
});

Route::get('/kamp', [DataController::class, 'showData']);

//Documenten
Route::get('/show-pdf-inschrijven', function () {
    $pathToFile = public_path('img/inschrijving.pdf');
    return response()->file($pathToFile);
});
Route::get('/show-pdf-medische', function () {
    $pathToFile = public_path('img/medische_fiche.pdf');
    return response()->file($pathToFile);
});


Route::post('/create-activiteit', [ActiviteitController::class, 'createActiviteit']);
Route::get('/activiteiten', [ActiviteitController::class, 'showActiviteiten']);
Route::get('/activiteiten/{groep}', [ActiviteitController::class, 'showActiviteiten']);



Route::post('/create-question', [QuestionController::class, 'createQuestion']);
Route::get('/vragen', [QuestionController::class, 'showQuestions']);
Route::delete('/delete-question', [QuestionController::class, 'deleteQuestion']);


Route::get('/miniMin', [ActiviteitController::class, 'showMiniMin']);
Route::get('/maxiMin', [ActiviteitController::class, 'showMaxiMin']);
Route::get('/tussers', [ActiviteitController::class, 'showTussers']);
Route::get('/hoofdleiding', [ActiviteitController::class, 'showHoofdleiding']);


