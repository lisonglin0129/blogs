<?php
/**
 * LD 后台路由文件
 * ============================================================================
 * * 版权所有 2016-2018   网络科技有限公司，并保留所有权利。
 * 网站地址: 
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id:admin_routes.php  2016年7月18日  Lisonglin
 * 
 */
Route::auth();

Route::get('/admin', '\App\Http\Controllers\Admin\IndexController@index');
Route::get('/admin/login', '\App\Http\Controllers\Admin\LoginController@index');
//--list列表
Route::get('/admin/CourseList', '\App\Http\Controllers\Admin\CourseListController@index');
Route::get('/admin/CourseAjaxList', '\App\Http\Controllers\Admin\CourseListController@AjaxCourseList');
Route::get('/admin/getCourseList',  '\App\Http\Controllers\Admin\CoursetTypeCatController@geCat');

//--分类管理
Route::get('/admin/CoursetCat','\App\Http\Controllers\Admin\CoursetTypeCatController@index');
Route::get('/admin/CoursetCatAdd', '\App\Http\Controllers\Admin\CoursetTypeCatController@addGrounp');
//--Post
Route::post('/admin/CoursetCatAdd', '\App\Http\Controllers\Admin\CoursetTypeCatController@addGrounp');
Route::get('/admin/cat', '\App\Http\Controllers\Admin\CoursetTypeCatController@cat');
Route::get('/admin/cat_{cid}', '\App\Http\Controllers\Admin\CoursetTypeCatController@catGroups');

//--用户信息
Route::get('/admin/info','\App\Http\Controllers\Admin\InfoController@index');
//--登录页面
Route::get('/admin/login', '\App\Http\Controllers\Admin\AuthController@index');

//--登录
Route::get('/admin/loging', '\App\Http\Controllers\Admin\AuthController@login');
//--Post登录路由设置
Route::post('/admin/loging', '\App\Http\Controllers\Admin\AuthController@login');
//--退出登录
Route::get('/admin/loginout', '\App\Http\Controllers\Admin\AuthController@loginout');

//--测试
Route::get('/admin/test','\App\Http\Controllers\Admin\test@test');

