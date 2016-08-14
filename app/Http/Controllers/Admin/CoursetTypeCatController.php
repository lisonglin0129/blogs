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
 * Id:CoursetTypeCatController.php  2016年7月18日  Lisonglin
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Admin;
use App\Model\admin\CoursetTypeModel;
use Illuminate\Http\Request;
use DB;
use App\util\Object;
use Hamcrest\Util;
class CoursetTypeCatController extends Admin{
	
	
	public function index(Request $requst) {

		$cat = DB::select("SELECT * FROM l_nature_type");
		
		$res = Object::cats(Object::object_to_array($cat));
		
		
		return view('admin/CoursetCat',['data'=>$res]);
	}
		
	//-- 分类列表
	
	public function geCat() {
		$cat = DB::select("SELECT * FROM l_nature_type");
		
		$res = Object::cats(Object::object_to_array($cat));
		
		return json_encode($res);
		
	}
	
	//--添加一个分类
	
	public function addGrounp (Request $requst) {
		$cat = DB::select("SELECT * FROM l_nature_type");
		
		$res = Object::cats(Object::object_to_array($cat));
		if($requst->act == 'add') {
			
		}
		return view('admin/CoursetCatAdd',['data'=>$res]);
	}
	
	//-- 通过分类id 查找下面的 数据
	
	public function catGroups(Request $request) {
		$cid = $request->cid;
		$res = CoursetTypeModel::findCatById($cid);
		$data['data'] = Object::object_to_array($res);
		return $data;
	}
	

}