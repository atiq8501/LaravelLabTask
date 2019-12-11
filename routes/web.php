<?php

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');
Route::get('/logout','LogoutController@index');

Route::get('/registration','RegistrationController@index');
Route::post('/registration','RegistrationController@store');

Route::get('/admin','AdminController@index')->name('admin.index');
Route::get('/employee','EmployeeController@index')->name('employee.index');
Route::get('/employee/add','EmployeeController@add')->name('employee.add');
Route::get('/employee/update','EmployeeController@update')->name('employee.update');

Route::group(['middleware'=>['sess']], function(){
            Route::get('/admin','AdminController@index')->name('admin.index');
            Route::get('/admin/addemployee','AdminController@addEmployee')->name('admin.addemployee');
            Route::post('/admin/addemployee','AdminController@insertEmployee');

            Route::get('/employee','EmployeeController@index')->name('employee.index');
            Route::get('/employee/addproduct','EmployeeController@add')->name('employee.add');
            Route::get('/employee/viewproduct','EmployeeController@viewProduct')->name('employee.view');
            Route::post('/employee/addproduct','EmployeeController@store');
            Route::get('/employee/update','EmployeeController@update')->name('employee.update');
});