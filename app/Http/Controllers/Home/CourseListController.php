<?php
/**
 * LD库文件
 * ============================================================================
 * * 版权所有 2016-2018   科技有限公司，并保留所有权利。
 * 网站地址: 
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id: CourseListController.php  2016年7月19日    Lisonglin
 */
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Model\home\CoursetListModel;
use App\Model\home\VedioModel;
class CourseListController extends Controller {
	 public function index(Request $request) {
	 	
	 	return view('Home/courselist');
	 }
	 
	 public function Courselist(Request $request) {
	 	$id = $request->id;
	 	//--课程id
	 	try {
	 		//--拿到课程的目录
		 	if(is_numeric($id)) {
		 		//$res = CoursetListModel::where('id',$id)->find(1);
				$res = DB::select("SELECT * FROM l_course WHERE id = ?",[$id]);
			 	$course_list = VedioModel::getList($id);
		 	}
		 	if($res) {
		 		return view('Home/courselist',['data'=>$res[0],'clist'=>$course_list,'status'=>1]);
		 	}else {
		 		return view('Home/404');
		 		exit;
		 	}
	 	}catch (Exception $e) {
	 		
	 		return redirect('/');
	 	
	 	} 

	 }
}