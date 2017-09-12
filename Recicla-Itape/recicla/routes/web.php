<?php
/*Namespace das rotas site*/
Route::group(['namespace'=>'site'],function(){
	Route::get('cadastro/entrar','CadastroController@index');
	/*Cadastro de usuarios*/
	Route::get('home', 'siteController@index');
	Route::get('/', 'siteController@index');
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
});

/*Routes de Login e Cadastro*/
/*Auth::routes();*/

// Authentication Routes...
$this->get('cadastro/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('cadastro/login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');
