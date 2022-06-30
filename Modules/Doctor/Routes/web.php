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


Route::prefix('doctor-panel')->middleware('doctor')->group(function() {

  Route::get('/','DoctorController@doctorDashboard')->name('doctor.panel.index');
  Route::get('editProfile','DoctorController@profile')->name('doctor.profile');
  Route::post('editProfile','DoctorController@UpdateProfile')->name('doctor.update.profile');
  Route::get('appointments','AppointmentController@index')->name('doctor.appointments.index');  
  Route::get('appointments/datatable','AppointmentController@datatable')->name('doctor.appointment.datatable');
  Route::post('appointments/change-status/{id}','AppointmentController@ChangeStatus')->name('doctor.appointment.change.status');
  Route::get('patients/index','PatientController@index')->name('doctor.patients.index');
  Route::get('patients/datatable','PatientController@datatable')->name('doctor.patients.datatable');
  Route::post('add/comment','AppointmentController@comment')->name('doctor.comment');
  Route::get('blogs/index','BlogController@index')->name('doctor.blogs.index');
  Route::get('blogs/create','BlogController@create')->name('doctor.blogs.create');
  Route::post('blogs/store','BlogController@store')->name('doctor.blogs.store');
  Route::get('blogs/datatable','BlogController@datatable')->name('doctor.blogs.datatable');
  Route::get('blogs/edit/{id}','BlogController@edit')->name('doctor.blogs.edit');
  Route::post('blogs/edit/{id}','BlogController@update')->name('doctor.blogs.update');
  Route::get('blogs/destroy/{id}','BlogController@destroy')->name('doctor.blogs.destroy');
  Route::get('midical/history/{id}','AppointmentController@midicalHistory')->name('midical.history');
  Route::get('midical/history/datatable/{id}','AppointmentController@midicalHistoryDatatable')->name('midical.history.datatable');


  Route::get('add/midical/history/{id}','AppointmentController@addMidicalHistory')->name('add.midical.history');  

  Route::post('midical/history/store','AppointmentController@storeMidicalHistory')->name('midical.history.store');

  
  

});


Route::get('doctor/login','AuthController@login')->name('doctor.login');
Route::post('doctor/login','AuthController@PostLogin')->name('doctor.post.login');
Route::get('doctor/logout','AuthController@logout')->name('doctor.logout');
Route::get('doctor/register','AuthController@register')->name('doctor.register');
Route::post('doctor/register','AuthController@PostRegister')->name('doctor.post.register');