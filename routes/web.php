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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/', 'IssueController@index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/list', 'IssueController@index');
    Route::get('/viewIssue/{id}', 'IssueController@view');
    Route::post('/updateIssue/{id}', 'IssueController@update');
    Route::get('/noPermisiion', 'HomeController@permission');

    Route::group(['middleware' => 'isAdmin'], function () {
        Route::post('/addIssue', 'IssueController@store');
        Route::get('/addIs', 'IssueController@create');
        Route::get('/issue-delete/{id}', 'IssueController@destroy');

        Route::get('/department', 'DepartmentController@create');
        Route::post('/addDepartment', 'DepartmentController@store');
        Route::get('/deplist', 'DepartmentController@index');

        Route::get('/technician', 'TechnicianController@index');
    });
});

