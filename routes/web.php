<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/addIs', function () {
    return view('addIssue');
});

Route::get('/list', function () {
    return view('issueList');
});

Route::get('/deplist', function () {
    return view('departmentList');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addIssue', 'IssueController@index');
Route::get('/issuelist', 'IssueController@index');

Route::get('/department', 'DepartmentController@index');
Route::get('/', 'DepartmentController@index');

Route::get('/technician', 'TechnicianController@index');
