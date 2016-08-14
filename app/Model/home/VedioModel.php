<?php
namespace  App\Model\home;
use Illuminate\Database\Eloquent\Model;
use DB;
class VedioModel extends Model {

	protected  $table = 'course';
	//通过课程id拿到课程资源列表
 	static function getList($id = 0) {
		 return self::where('course.id',$id)
			 		->leftJoin('course_move','course_move.cid','=','course.id')
			 		->get();
	} 

}