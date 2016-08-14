<?php
/**
 * PHP库文件
 * ============================================================================
 * * 版权所有 2016-2018 ，作者留所有权利。
 * 
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id: Lo‌ginController.php 2016年7月13日
 */
namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller{
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('login/index');
	}
	
	public function loginout() {
		Auth::logout();
	}
}