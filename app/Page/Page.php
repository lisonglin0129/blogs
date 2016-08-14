<?php
namespace  App\Page;

use DB;
use Illuminate\Http\Request;

class Page extends Request{
	
	//--分页样式默认
	
	protected  $style = 'defult';
	
	//--默认采用缓存分页 ， 可以修改数据库分页
	
	protected  $type  = 'cache';
	
	//--分页的大小
	
	private $PageSize;
	
	//--页面的索引
	
	public  $PageIndex;
	
	
	//--下一页
	
	public  $PageNext;
	
	
	//--上一页
	
	public  $PageLast;
	
	//--数据大小
	
	public  $DataSize;
	
	//--分页数据
	
	public  $DataList;
	
	//--模型对象
	
	public  $Model;
	
	
	public function __construct(Request $requst) {
		
	}
	public function Page(Request $requst) {
	
	
	}
	public function setPageSize($PageSize) {
		 $this->PageSize = $PageSize;
		 return $this;
	}
	public function getData() {
		$res = $this->Model->simplePaginate($this->PageSize);
		return $res;
	}

}