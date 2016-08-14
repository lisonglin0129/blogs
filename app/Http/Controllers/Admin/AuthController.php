<?php
/**
 * PHP 登录类
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
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\UserModel;
use phpDocumentor\Reflection\Types\Void;
class AuthController extends Controller {
	
	protected  $token;
	
	protected  $form = ['username'=>'username','password'=>'Password'];
	
	//--默认是登陆页面
	public function index(Request $requst)
	{
		return view('admin/login');
		
	}
	
	/**
	 * 退出登录 
	 * 
	 * @param Request $request
	 * 
	 * void exit
	 */
	
	public function loginout(Request $request) {
		
		$request->session()->forget('user');
		
		$request->session()->save();
		
		//--判断session是否是空的 ，如果是空的 则 跳转到登陆页面
		
		if(false === $request->session()->has('user')) {
		
			header('Location:/admin/login');
			
			exit;
		
		}
	}
	
    /**
     * 登录处理
     * @param Request $request
     * regurn Void
     */
	public function login(Request $request) {
		
		
		$this->token = $request->get('_token');
		
		$username = $request->get('username');		
		
		$password = $request->get('Password');

		
		$umodel = new UserModel();
	

		//--查询用户
		$user = $umodel->where('username',$username)
					   ->where('password',trim(md5($password)))
			 		   ->get();

		//进行判断
		if(empty($user[0])) {
				header('Location:/admin/login');
				exit;
		}
		//--判断是不是第一次登录，如果是则往Session 里面添加数据
		if(!$request->session()->has('user')) {
			
			$request->session()->push('user', $user[0]);
		
		}else {   //--成功登陆则 修改Session里面的值
			
			$request->session()->get('user', $user[0]);
		
		}
		
		//--将Token更新到数据库
		
		$umodel->where('id',$user[0]->id)->update(['remember_token'=>$this->token]);
		
		$request->session()->save();
		
		header('Location:/admin');
		
		exit;
	}	
	/**
	 * Ajax登录处理类
	 * @param Request $request
	 * @return mixed Json
	 */
	public function Ajaxlogin(Request $request) {
		
	
		$this->token = $request->get('_token');
	
		$username = $request->get('username');
	
		$password = $request->get('Password');
	
		$umodel = new UserModel();
		//--查询用户
		$user = $umodel->where('username',$username)
					   ->where('password',trim(md5($password)))
					   ->get();
		//进行判断
		if(empty($user[0])) {
			//-- 返回json
			return json_decode(array(
					'Status'   => '0',
 					'call_url' => '/admin/login'
			));
			
			exit;
		}
		
		$umodel->where('id',$user[0]->id)->update(['remember_token'=>$this->token]);
		
		return json_decode(array(
					'Status'   => '0',
 					'call_url' => '/admin'
		));
		exit;
	}
}