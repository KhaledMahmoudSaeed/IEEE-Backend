<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('test', function () {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return "done";
});
// Route::get('/', function () {
//     return view('home');
// }); we can ignore this long code line by that one when we just want to view page 
Route::view('/', 'home');
Route::view('/contact', 'contact');

//Route::controller(JobController::class)->group(function () { // using route group
//    Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
//});

Route::resource('jobs', JobController::class);
Route::resource('jobs', JobController::class)->only('edit')->middleware(['auth', 'can:edit,job']); // the last job is refereing to the wild card {job} which will be passed to gate
Route::resource('jobs', JobController::class)->only('store')->middleware('auth');
// using route resorce make these 7 routes autmatically by its default names which we are using
// this can be done too if JobController is empty
// you can add a third attribute to this method to limit or determine what from those 7 routes will be impelemented using an array and choose only or except
//['only' =>['index','show']] or use ['except' =>['index','show']]  check the difference between them by running command php artisan route::list --excepte-vendor

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);



