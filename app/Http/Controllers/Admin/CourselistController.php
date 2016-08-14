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
 * Id:CourselistController.php  2016年7月18日  Lisonglin
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Page\Page;
use App\Model\admin\CoursetListModel;
use DB;
class CourseListController extends Admin
{
	public function index(Request $request) 
	{	
		return view('admin/CourseList');
	}
	public function AjaxCourseList() {
		$start = $_GET['start'];
		$length = isset($_GET['length']) ? $_GET['length'] : 10 ;
		if(isset($_GET['search']['value'])&&$_GET['search']['value']!= '') {
			$seachValue = " where course_name like '%".$_GET['search']['value']."%' ";
		}else {
			$seachValue = "";
		}
		//$limit = " LIMIT  ".$start.','.$length;
		$res  = DB::select("select * from l_course ".$seachValue);
		$data['draw'] = 3;
		$data['aaData'] = $res;
		$data['iTotalDisplayRecords'] = count($data['aaData']);
		$data['iTotalRecords'] = count($data['aaData']);
		echo json_encode($data);
		exit;
	}

	
}