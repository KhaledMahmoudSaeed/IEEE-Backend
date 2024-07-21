<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => User::all()
    ]);
});
Route::get('/job/{id}', function ($id) {
    $job = User::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});