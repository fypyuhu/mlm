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

Route::get('/user/index','UserController@index');
Route::get('/user/refferals','UserController@refferals');
Route::get('/user/upgrade','UpgradeController@upgrade');
Route::get('/user/logout','UserController@logout');

Route::get('/user/withdraw','UserController@withdraw');
Route::post('/user/withdraw','UserController@requestWithdraw');


Route::get('/user/profile','UserController@profile');		
Route::post('/user/profile','UserController@profileUpdate');	

Route::get('/user/security','UserController@security');		
Route::post('/user/security','UserController@securityUpdate');	


Route::get('/register','HomeController@register');
Route::post('/register','UserController@register');

Route::get('/login','HomeController@login');
Route::post('/login','UserController@login');
	





Route::post('/user/payementSucessfull', 'UserController@index');

Route::post('/user/payementCancel', 'UserController@index');


Route::post('/user/perfectMoneyStatus', 'UserController@perfectMoneyStatus');

Route::get('/user/confirmByAdmin', 'UserController@confirmByAdmin');



/*Route::get('/about','myController@aboutPage');
//Route::get('usama/', function()
//{
//	$name = "sajad";

//	return View::make('usama')->with('name',$name);
	
//});

*/


Route::get('/usama', function()
{
    return "usama";
});

Route::get('/user/index', 'UserController@index');
Route::get('/user/links', 'UserController@links1');
Route::get('/user/messages', 'UserController@messages');
Route::get('/user/profile', 'UserController@profile');
Route::get('/user/security', 'UserController@security');
Route::get('/user/signout', function()
{
    return "user sign out";
});
Route::get('/user/shopProduct', 'ShopController@shop');
Route::post('/user/shopProduct', 'ShopController@shopPost');
Route::get('/user/myorders', 'ShopController@myorders');

/*Route::get('/users/','UserController@all');
Route::get('/users/{username}',function($username){
	$sUser = new UserController();

	return $sUser->specific($username);
	//return $username;

});
*/



Route::get('/admin/','AdminController@loginPage');
Route::get('/admin/login','AdminController@loginPage');
Route::post('/admin/login','AdminController@login');
Route::post('/admin/','AdminController@login');


Route::get('/admin/users','AdminController@usersPage');
Route::post('/admin/users','AdminController@updateUser');

Route::post('/admin/givepayment',function(){
	$username = Input::get('username');
		$sUser = new UserController();

		$sUser->payToParents($username);
		return "Commition has been given ";
	


});


Route::get('/admin/logout','AdminController@logout');
Route::get('/admin/withdraws','AdminController@withdrawsPage');
Route::post('/admin/withdraws','AdminController@updateWithdraws');
Route::get('/admin/orders','AdminController@ordersPage');
Route::post('/admin/orders','AdminController@ordersPost');
