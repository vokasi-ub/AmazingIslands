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
Route::post('/storeInquire', 'IndexController@storeInquire');


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
Route::post('get', 'PulauController@getRequest');
Route::get('hapus/{id}','PulauController@hapus');
Route::post ( '/editItem', 'PulauController@editItem' );

// crud Inquire
Route::get('tb_inquire', 'InquireController@index');
Route::get('keyword', 'InquireController@paginate');
Route::get('hapus/{id}','InquireController@hapus');

// crud User
Route::get('tb_user', 'UserController@index');
Route::get('keywords', 'UserController@paginate2');
Route::get('hapus/{id}','UserController@hapus');

//searching
Route::get('query', 'AdminController@search');  