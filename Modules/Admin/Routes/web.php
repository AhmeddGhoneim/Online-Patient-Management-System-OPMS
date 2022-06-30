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

Route::prefix('admin')->middleware('auth')->group(function() {

    Route::get('contact-us','AdminController@contact')->name('admin.contact');
    Route::get('datatable/contact-us','AdminController@ContactDatatable')->name('admin.datatable.contact');

    Route::get('/','AdminController@dashboard')->name('dashboard.index');
    Route::get('company/create','CompanyController@create')->name('company.create');
    Route::post('company/create','CompanyController@store')->name('company.store');
    Route::get('company/index','CompanyController@index')->name('company.index');
    Route::get('company/datatable','CompanyController@datatable')->name('company.datatable');
    Route::get('company/edit/{id}','CompanyController@edit')->name('company.edit');
    Route::post('company/edit/{id}','CompanyController@update')->name('company.update');
    Route::get('company/destroy/{id}','CompanyController@destroy')->name('company.destroy');

    Route::get('user/create','AdminController@create')->name('user.create');
    Route::post('user/create','AdminController@store')->name('user.store');
    Route::get('user/index','AdminController@index')->name('user.index');
    Route::get('user/datatable','AdminController@datatable')->name('user.datatable');
    Route::get('user/edit/{id}','AdminController@edit')->name('user.edit');
    Route::post('user/edit/{id}','AdminController@update')->name('user.update');
    Route::get('user/destroy/{id}','AdminController@destroy')->name('user.destroy');


    Route::prefix('category')->group(function() {
        Route::get('/index', 'AdminCategoryController@index')->name('admin.category.index');
        Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
        Route::post('create', 'AdminCategoryController@store')->name('admin.category.store');
        Route::get('datatable','AdminCategoryController@datatable')->name('category.datatable');
        Route::get('destroy/{id}','AdminCategoryController@destroy')->name('category.destroy');
        Route::get('edit/{id}', 'AdminCategoryController@edit')->name('category.edit');
        Route::Post('update/{id}', 'AdminCategoryController@update')->name('category.update');

    });


    Route::prefix('doctor')->group(function (){
        //anas-new
        Route::get('/','AdminDoctorController@index')->name('admin.doctor.index');
        Route::get('/datatable','AdminDoctorController@datatable')->name('admin.doctor.datatable');
        Route::get('/create','AdminDoctorController@create')->name('admin.doctor.create');
        Route::post('/store','AdminDoctorController@store')->name('admin.doctor.store');
        Route::get('/edit/{id}','AdminDoctorController@edit')->name('admin.doctor.edit');
        Route::post('/update/{id}','AdminDoctorController@update')->name('admin.doctor.update');
        Route::get('destroy/{id}','AdminDoctorController@destroy')->name('doctor.destroy');

    });

    Route::prefix('patient')->group(function (){
        //anas-new
        Route::get('/','AdminPatientController@index')->name('admin.patient.index');
        Route::get('/datatable','AdminPatientController@datatable')->name('admin.patient.datatable');
        Route::get('/create','AdminPatientController@create')->name('admin.patient.create');
        Route::post('/store','AdminPatientController@store')->name('admin.patient.store');
        Route::get('/edit/{id}','AdminPatientController@edit')->name('admin.patient.edit');
        Route::post('/update/{id}','AdminPatientController@update')->name('admin.patient.update');
        Route::get('destroy/{id}','AdminPatientController@destroy')->name('patient.destroy');

    });


    Route::prefix('appointment')->group(function (){
        //anas-new
        Route::get('/','AdminAppointmentController@index')->name('admin.appointment.index');
        Route::get('/datatable','AdminAppointmentController@datatable')->name('admin.appointment.datatable');
        // Route::get('/create','AdminAppointmentController@create')->name('admin.patient.create');
        // Route::post('/store','AdminAppointmentController@store')->name('admin.patient.store');
        // Route::get('/edit/{id}','AdminAppointmentController@edit')->name('admin.patient.edit');
        // Route::post('/update/{id}','AdminAppointmentController@update')->name('admin.patient.update');

    });
   
    
    

});
