<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalya-team', function() {
  return view('team');
});

Route::get('/kalya-services', function() {
  return view('services');
});

Route::get('/kalya-contact', function() {
  return view('contact');
});

Route::get('/kalya-portfolio', function() {
  return view('portfolio');
});

Route::get('/kalya-appointment', function() {
  return view('appointment');
});
