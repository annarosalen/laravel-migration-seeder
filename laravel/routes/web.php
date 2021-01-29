<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/emps', 'EmployeeController@index') -> name('employees-index');

Route::get('/emps/{id}', 'EmployeeController@show') -> name('emps-show');

Route::get('/offices', 'OfficeController@index') -> name('offices-index');
Route::get('/offices/{id}', 'OfficeController@show') -> name('offices-show');