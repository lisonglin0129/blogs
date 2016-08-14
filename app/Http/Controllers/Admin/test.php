<?php
namespace App\Http\Controllers\Admin;

use DB;
class test extends Admin {
	public function test() {
		$res  = DB::select("select * from l_course");
		$data['data'] = $res;
		$data['draw'] = 1;
		echo json_encode($data);
		exit;
	}
}