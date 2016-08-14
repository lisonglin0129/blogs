<?php
/**
 * LD类文件
 * ============================================================================
 * * 版权所有 2016-2018   网络科技有限公司，并保留所有权利。
 * 网站地址: 
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id:IndexController.php  2016年7月18日  Lisonglin
 */
namespace App\Http\Controllers\Admin;
use DB;
use App\Model\admin\coursetype;
use App\Http\Requests;
use Illuminate\Http\Request;

class IndexController extends Admin{

	public function index(Request $request)
	{
	
/* 		$jssdk = new JSSDK("wx823e2c8abed5d544", "c904ec65c5cf2d83850447ea36216cab");
		$signPackage = $jssdk->GetSignPackage(); */
		return view('admin/index');
		
	}
	
}