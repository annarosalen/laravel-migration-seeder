<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/emps', 'EmployeeController@index') -> name('employee-index');