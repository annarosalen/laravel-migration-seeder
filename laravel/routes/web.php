<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/emps', 'EmployeeController@index') -> name('employees-index');
Route::get('/emps/{id}', 'EmployeeController@show') -> name('emps-show');

Route::get('/offices', 'OfficeController@index') -> name('offices-index');
Route::get('/offices/{id}', 'OfficeController@show') -> name('offices-show');

Route::get('/brands', 'BrandController@index') -> name('brands-index');
Route::get('/brands/{id}', 'BrandController@show') -> name('brands-show');

Route::get('/new/emp', 'EmployeeController@create') ->name('emp-create');
Route::post('/new/emp/store', 'EmployeeController@store') ->name('emp-store');