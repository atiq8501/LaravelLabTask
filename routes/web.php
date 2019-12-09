<?php

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@verify');

Route::get('/registration','RegistrationController@index');
Route::post('/registration','RegistrationController@store');

Route::get('/admin','AdminController@index')->name('admin.index');
Route::get('/employee','EmployeeController@index')->name('employee.index');
Route::get('/employee/add','EmployeeController@add')->name('employee.add');
Route::get('/employee/update','EmployeeController@update')->name('employee.update');