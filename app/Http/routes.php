<?php

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

Route::get('/', function () {
    return view('welcome');
});
//1：全局路由
// Route::get('age/{id?}',function(){
// 	return "你是对的";
// });
//2：命名路由
//Route::get('user/profile',[
// 	'as'=>'profile','uses'=>'UserController@info'
// ]);
//3：命名路由方式2
//Route::get('user/profile','UserController@info')->name('profile');

//4：路由群主何明明路由
//  Route::group(['middleware'=>'OldMiddleware'],function(){
//   	Route::get('/',function(){});
//  	Route::get('user/profile',function(){});
//  	Route::get('home/{age}',function($id){
// 	return "你小于200岁，又回到首页了";
// });
//  });

//
// 
//Route::get('user/adduser','UserController@getAdduser');
//Route::group(['namespace'=>'xxxxx','middleware'=>['checkuser','dealuser']]);

//Route::group(['middleware'=>['checkuser','dealuser']],function(){

//    Route::post('user/addUser','UserController@postAdduser');
//});
/*
Route::group(['namespace'=>'haha','middleware'=>['checkuser','dealuser']],function(){

    Route::post('user/addUser','UserController@postAdduser');
});
*/

Route::get('user/faca','UserController@face');
Route::get('user/tt','UserController@tt');
Route::get('user/tt/{id}','UserController@tt');
Route::get('test','UserController@test');