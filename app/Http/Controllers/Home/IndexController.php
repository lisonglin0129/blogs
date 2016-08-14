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
 * Id:IndexController.php  2016年7月19日  Lisonglin
 */
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Model\home\Index;
class IndexController extends Controller{
	public function index() {
		$res = Index::all();
		return view('Home/index',['data'=>$res]);
	}

}