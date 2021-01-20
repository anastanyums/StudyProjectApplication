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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addIssue', 'IssueController@store');
Route::get('/list', 'IssueController@index');
Route::get('/addIs', 'IssueController@create');

Route::get('/department', 'DepartmentController@create');
Route::post('/addDepartment', 'DepartmentController@store');
Route::get('/deplist', 'DepartmentController@index');

Route::get('/technician', 'TechnicianController@index');
