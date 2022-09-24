<?php
define("YAJRA_PATH", base_path("vendor\yajra\laravel-datatables-oracle\src\Datatables.php"));
define("BUTTONS_PATH", base_path("vendor\laravel-datatables-buttons-4.0\src"));


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//start middleware admin
Route::group(['middleware' => ["admin"]],function (){

Route::get('/adminpanal','AdminController@index');

Route::get('/adminpanal/user/index','UserController@index');
Route::get('/adminpanal/user/data', 'UserController@anyData');
Route::get('/adminpanal/user/create','UserController@create');
Route::post('/adminpanal/user/store','UserController@store');
Route::get('/adminpanal/user/edit/{id}','UserController@edit');
Route::post('/adminpanal/user/update/{id}','UserController@update');
Route::post('/adminpanal/user/changepass','UserController@changepass');
Route::get('/adminpanal/user/delete/{id}','UserController@delete');


//});
Route::get('/adminpanal/setting/index','SettingController@index');
Route::get('/adminpanal/setting/create','SettingController@create');
Route::post('/adminpanal/setting/store','SettingController@store');
Route::get('/adminpanal/setting/edit/{id}','SettingController@edit');
Route::post('/adminpanal/setting/update/{id}','SettingController@update');
Route::get('/adminpanal/setting/delete/{id}','SettingController@delete');
Route::get('/adminpanal/bu/index/{id?}','BuController@index');
Route::get('/adminpanal/bu/create','BuController@create');
Route::post('/adminpanal/bu/store','BuController@store');
Route::get('/adminpanal/bu/edit/{id}','BuController@edit');
Route::get('/adminpanal/bu/delete/{id}','BuController@delete');
Route::post('/adminpanal/bu/update/{id}','BuController@update');


Route::get('/adminpanal/message/index','MessageController@index');
Route::get('/adminpanal/message/edit/{id}','MessageController@edit');
Route::post('/adminpanal/message/update/{id}','MessageController@update');
Route::get('/adminpanal/message/delete/{id}','MessageController@delete');
});

//end middleware admin

Route::get('/home', 'HomeController@index');

Route::get('/adminpanal/message/create','MessageController@create');
Route::post('/adminpanal/message/store','MessageController@store');
Route::get('/contact', 'MessageController@contactus');


Route::get('/showall','BuController@showall');
Route::get('/forrent','BuController@forrent');
Route::get('/forbuy','BuController@forbuy');
Route::get('/type/{id}','BuController@type');
Route::get('/type/3','BuController@showtype');
Route::get('/search','BuController@search');
Route::get('/single/{id}','BuController@single');
Route::get('/user/edit','UserController@editprofile');
Route::post('/changepass','UserController@changepassprofile');



Route::get('/allbuilds','BuController@allbuildings')->middleware("auth");
Route::get('/bu/edit/{id}','BuController@buedit')->middleware("auth");
Route::post('/bu/update/{id}','BuController@updatebu')->middleware("auth");
Route::get('/allbuild','BuController@allbuilding')->middleware("auth");
Route::get('/building/add','BuController@bucreatefrontwebsite')->middleware("auth");
Route::post('/adminpanal/bu/storebu','BuController@storebu')->middleware("auth");


Route::group(["middleware"=>"web"],function (){
	Route::auth();

	Route::get('/', function () {
	    return view('welcome');
	});
});


/*Route::get('auth/{provider}', 'AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'AuthController@handleProviderCallback');*/
