<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::post('/', function () {
    return view('general.contact');
});
Route::get('/about', function () {
    return view('general.about');
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books', [BookController::class, 'destroy']);
// {{ $id }} /{{$id}}/destroy
Route::get('/books/{{ $id }}/edit', [BookController::class, 'edit']);
Route::delete('/books/{{$singleBook->id}}/destroy', [BookController::class, 'destroy']);