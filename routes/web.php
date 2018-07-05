<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
  return view('login');
});
Route::get('/child', function () {
  return view('patient/child');
});
Route::get('/child/profile', function () {
  return view('patient/profile');
});
Route::get('/child/material', function () {
  return view('patient/material');
});
Route::get('/child/material/more', function () {
  return view('patient/material-more');
});
Route::get('/child/material/quiz', function () {
  return view('patient/quiz');
});
Route::get('/child/material/intermezzo', function () {
  return view('patient/intermezzo');
});
Route::get('/parents', function () {
  return view('parent/parents');
});
Route::get('/parents/counseling', function () {
  return view('parent/counseling');
});
Route::get('/doctor', function () {
  return view('doctor/doctor');
});
Route::get('/doctor/counseling', function () {
  return view('doctor/doctor-counseling');
});
