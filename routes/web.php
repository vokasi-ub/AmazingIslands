<?php
Route::get('/', function () {
    return view('index');
});


Route::get('/', 'IndexController@index');
Route::get('/rangyai', 'IndexController@rangyai');
Route::get('/eshpabekong', 'IndexController@eshpabekong');
Route::get('/little', 'IndexController@little');
Route::get('/lambay', 'IndexController@lambay');
Route::get('/macan', 'IndexController@macan');
Route::get('/cave', 'IndexController@cave');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userlogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/store', 'Auth\AdminRegisterController@store')->name('admin.store');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

// crud Tabel Pulau
Route::resource('tb_pulau', 'PulauController');
Route::get('/create','PulauController@create');
Route::post('/store','PulauController@store');
Route::get('/edit/{id}','PulauController@edit');
Route::post('/update/{id}','PulauController@update');
Route::get('hapus/{id}','PulauController@hapus');

// crud Inquire
Route::get('tb_inquire', 'InquireController@index');

//searching
Route::get('query', 'AdminController@search');
Route::get('query', 'AdminController@search');  