<?php




Route::prefix('/')->group(function() {
    Route::get('/', 'FrontController@index')->name('front.index');
    Route::get('/doctors', 'FrontController@doctors')->name('front.doctors');
    Route::get('/blogs','FrontController@blogs')->name('front.blogs');
    Route::get('/about','FrontController@about')->name('front.about');
    Route::get('/services','FrontController@services')->name('front.services');

    Route::get('/blog/{id}','FrontController@SingleBlog')->name('front.SingleBlog');
    Route::get('/contact-us','FrontController@contact')->name('front.contact');
    Route::post('/contact-us','FrontController@PostContact')->name('front.post.contact');

    Route::get('patiant/login','PatiantController@index')->name('patiant.login');
    Route::post('patiant/login','PatiantController@login')->name('patiant.post.login');

    Route::get('patiant/register','PatiantController@register')->name('patiant.register');
    Route::post('patiant/register','PatiantController@PostRegister')->name('patiant.post.register');

    Route::get('patiant/logout','PatiantController@logout')->name('patiant.logout');

    Route::post('ajax/doctors','PatiantController@AjaxDoctors')->name('ajax.doctors');
    Route::get('/doctor/{id}','FrontController@SingleDoctor')->name('front.SingleDoctor');


});

Route::prefix('/')->middleware('patiant')->group(function() {
    Route::post('make/appointment','PatiantController@appointment')->name('make.appointment');
    Route::get('patiant/dashboard','PatiantController@patiantDashboard')->name('patinet.dashboard');
});


Route::match(['get', 'post'], '/botman', 'BotManController@handle');
