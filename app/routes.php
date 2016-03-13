<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::controller('password', 'RemindersController');

Route::controller('admin', 'AdminController');


Route::resource('session', 'SessionsController');
Route::controller('user', 'UsersController');
Route::controller('shop', 'ShopController');
Route::controller('pm', 'PMController');
Route::controller('register', 'RegisterController');




Route::get('/oppertunity',function(){
	return View::make('oppertunity');
});
Route::get('/forget','RecoverPassword@recoverPasswordForm');
Route::post('/forget','RecoverPassword@recoverPassword');
Route::get('/recoverPasswordToken/{code}','RecoverPassword@recoverPasswordToken');


Route::get('/index','HomeController@index');	
Route::get('/','HomeController@index');	
Route::get('/aboutus','HomeController@aboutus');
Route::get('/contactus','HomeController@contactus');

/*
Route::get('/user/index','UsersController@index');
Route::get('/user/refferals','UsersController@refferals');
Route::get('/user/upgrade','UpgradeController@upgrade');
Route::get('/user/logout','UsersController@logout');

Route::get('/user/withdraw','UsersController@withdraw');
Route::post('/user/withdraw','UsersController@requestWithdraw');


Route::get('/user/profile','UsersController@profile');		
Route::post('/user/profile','UsersController@profileUpdate');	

Route::get('/user/security','UsersController@security');		
Route::post('/user/security','UsersController@securityUpdate');	
*/

Route::get('/register','HomeController@register');

Route::post('/register','RegisterController@postUser');
    

Route::get('/login','SessionsController@create');
	






Route::get('/user/confirmByAdmin', 'UsersController@confirmByAdmin');


Route::get('/developer', function()
{
    return "Muhammad Usama Riaz Mobile : 03118222625";
});




Route::get('/admin/','AdminController@loginPage');
Route::get('/admin/login','AdminController@loginPage');
Route::post('/admin/login','AdminController@login');
Route::post('/admin/','AdminController@login');


Route::get('/admin/users','AdminController@usersPage');
Route::post('/admin/users','AdminController@updateUser');

Route::post('/admin/givepayment',function(){
	$username = Input::get('username');
		$sUser = new UsersController();

		$sUser->payToParents($username);
		return "Commition has been given ";
	


});


Route::get('/admin/logout','AdminController@logout');
Route::get('/admin/withdraws','AdminController@withdrawsPage');
Route::post('/admin/withdraws','AdminController@updateWithdraws');
Route::get('/admin/orders','AdminController@ordersPage');
Route::post('/admin/orders','AdminController@ordersPost');


