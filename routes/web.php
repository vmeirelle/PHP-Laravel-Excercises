<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/string-manipulation', function () {
    return view('string-manipulation');
});

Route::get('/array-manipulation', function () {
    return view('array-manipulation');
});

Route::get('/math-manipulation', function () {
    return view('math-manipulation');
});

Route::get('/conditionals-manipulation', function () {
    return view('conditionals-manipulation');
});

Route::get('/loops-manipulation', function () {
    return view('loops-manipulation');
});

Route::get('/functions-manipulation', function () {
    return view('functions-manipulation');
});

Route::get('/oop-manipulation', function () {
    return view('oop-manipulation');
});

Route::post('/sendString', [FormsController::class, 'sendString']);
Route::post('/sendArray', [FormsController::class, 'sendArray']);
Route::post('/sendMath', [FormsController::class, 'sendMath']);