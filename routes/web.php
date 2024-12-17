<?php
use App\Http\Controllers\job_listingController;
use App\Http\Controllers\registeredusercontroller;
use App\Http\Controllers\sessioncontroller;
use App\Models\job_listing;
use Illuminate\Support\Facades\Route;
//? the home
Route::get('/', function () {return view('welcome');});
//? the home
Route::get('/home', function () {return view('home');});
//? the about
Route::get('/about', function () {return view('about');});
//?the contact
Route::get('/contact', function () {return view('contact');});

//! ==========================JOB_LISTING=================================== !

//? the jobs => index
Route::get('/jobs', [job_listingController::class, 'index']);
//? the jobs => create
Route::get('/jobs/create', function () {return view('jobs.create');});
//? the jobs => store
Route::post('/jobs', [job_listingController::class, 'store']);
//? the job =>  show
Route::get('/jobs/{job_listing}', [job_listingController::class, 'show']);
//? the job =>  edit
// Route::get('/jobs/{job}/edit', function (job_listing $job_listing) {return view('jobs.update', ['job' => $job_listing]);});
Route::get('/jobs/{job}/edit', [job_listingController::class, 'update']);
//? the job =>  update
Route::patch('/jobs/{job}', [job_listingController::class, 'edit']);
//? the jobs =>  delete
Route::delete('/jobs/{job_listing}', [job_listingController::class, 'destroy']);

//? auth
Route::get('/register' , [registeredusercontroller::class , 'create']);
Route::post('/register' , [registeredusercontroller::class , 'store']);
Route::get('/login' , [sessioncontroller::class , 'login']);
Route::post('/login' , [sessioncontroller::class , 'confirmation']);
Route::get('/logout' , [sessioncontroller::class , 'destroy']);
Route::post('/logout' , [sessioncontroller::class , 'destroy']);