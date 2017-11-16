<?php
/*Namespace das rotas site*/
Route::group(['namespace'=>'Site'],function(){
	Route::get('/', 'siteController@index');
	/*Retorna o mapa e seus respectivos marcadores de cooperativas.*/
	Route::get('reciclar', 'siteController@queroReciclar');
	Route::get('cooperativas', 'siteController@Cooperativas');
	Route::get('tutoriais/{id}','siteController@Tutoriais');
	Route::get('reciclar/f={dado}','siteController@mapFilter');
});

/*Login admin*/
Route::group(['middleware' => 'admin'], function (){
	Route::group(['middleware'=> 'auth:admin'], function(){
		Route::get('/admin','AdminController@index');
	});
	Route::get('/admin/login','AdminController@login');
	Route::post('/admin/login','AdminController@postLogin');
	Route::get('/admin/logout','AdminController@logout');
});

/* Rotas da tela de administrador */
Route::get('admin', 'AdminController@admin');
Route::get('admin/index', 'AdminController@index');
Route::get('info', 'AdminController@info');
Route::get('ponto', 'AdminController@ponto');
Route::get('coop', 'AdminController@coop');
Route::get('gift', 'AdminController@gift');
Route::get('check', 'AdminController@check');
Route::get('add','AdminController@add');

/*Criar dados para a tabela*/
Route::post('admin/info/store', 'AdminController@infoStore');
Route::post('admin/ponto/store', 'AdminController@pontoStore');
Route::post('admin/coop/store', 'AdminController@coopStore');
Route::post('admin/add/store','AdminController@addStore');
Route::post('admin/gift/store', 'AdminController@giftStore');
Route::post('admin/check/store', 'AdminController@checkVoucher');

/*Editar os dados da tabela*/
Route::get('admin/info/edit={id}', 'AdminController@infoEdit');
Route::post('admin/info/update', 'AdminController@infoUpdate');
Route::post('admin/ponto/edit', 'AdminController@pontoedit');
Route::post('admin/coop/edit', 'AdminController@coopedit');
Route::post('admin/add/edit','AdminController@addedit');
Route::post('admin/gift/edit', 'AdminController@giftedit');
Route::post('admin/check/edit', 'AdminController@checkVoucher');

/*Deletar os dados da tabela*/
Route::get('admin/info/delete={id}', 'AdminController@infoDelete');
Route::post('admin/ponto/delete', 'AdminController@pontodelete');
Route::post('admin/coop/delete', 'AdminController@coopdelete');
Route::post('admin/add/delete','AdminController@adddelete');
Route::post('admin/gift/delete', 'AdminController@giftdelete');
Route::post('admin/check/delete', 'AdminController@checkVoucher');

/*Mostrar os dados das tabelas*/
Route::get('admin/info/show', 'AdminController@infoshow');
Route::get('admin/ponto/show', 'AdminController@pontoshow');
Route::get('admin/coop/show', 'AdminController@coopshow');
Route::get('admin/add/show','AdminController@addshow');
Route::get('admin/gift/show', 'AdminController@giftshow');
Route::get('admin/check/show', 'AdminController@checkVoucher');


/*Rotas de Login e Cadastro*/
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
