<?php
/*
Pages Controller or index page
*/
Route::get('/','PagesController@index');
Route::get('/quotes','PagesController@quotes');
Route::get('/invocies','PagesController@invoices');
Route::get('/pricing','PagesController@pricing');
Route::get('/shipping','PagesController@shipping');
Route::get('/purchase','PagesController@purchase');
Route::get('/trade','PagesController@trade');
Route::match(['get', 'post'], '/contact','PagesController@contact')->name('contact');
Route::match(['get', 'post'], '/register','PagesController@register')->name('register');
Route::match(['get', 'post'], '/login','PagesController@login')->name('login');

//protected routes for Authentic user 
 Route::get('/user/dashboard','UserController@dashboard')->name('user.dashboard');
//protected routes for Authentic Admin 
Route::get('/admin/dashboard','AdminController@dashboard')->name('admin.dashboard');

