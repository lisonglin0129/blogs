<?php
use phpDocumentor\Reflection\DocBlock\Tags\Throws;

/**
 * 前台路由文件
 * ============================================================================
 * * 版权所有 2016-2018   网络科技有限公司，并保留所有权利。
 * 网站地址: 
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id:app_routes.php  2016年7月18日  Lisonglin
 */
Route::get('/', 'Home\IndexController@index');
Route::get('/index', 'Home\IndexController@index');
Route::get('/home', 'HomeController@index');
Route::get('/player', 'Home\PlayerController@index');

Route::get('/test_{id}', 'Home\test@index');

Route::get('/list', 'Home\CourseListController@index');


Route::get('/list_{id}', 'Home\CourseListController@Courselist');
//--登录

Route::get('/login', 'Auth\AuthController@getLogin');

Route::post('bin/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
//--注册
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('bin/register', 'Auth\AuthController@postRegister');



