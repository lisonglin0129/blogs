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
 * Id:Object.php  2016年7月19日  Lisonglin
 */
namespace App\util;
class Object {
	/**
	 * 对象转数组
	 * @param Object $array
	 * @return array
	 */
	static function object_to_array($array) {  
	    if(is_object($array)) {
	    		 
	    	   $array = (array)$array;  
	    		
	     } if(is_array($array)) {  
	        
	     	 foreach($array as $key=>$value) {  
	         
	     	 	$array[$key] = self::object_to_array($value);  
	       
	     	}  
	     
	     }  
	     
	     return $array;  
	}
	
	/**
	 * 数组转对象
	 * @param unknown $array
	 */
	
	static function Array_to_object($array) {
		
		return (Object)$array;
		
	}
	/**
	 * 数组转对象
	 * @param unknown $array
	 */
	
	static function to_arrayObject($array) {
	
		return new \ArrayObject($array);
	
	}
	/**
	 * 分类计算， 遍历
	 * @param array $cat
	 * @return Array
	 */
	static function cats (Array $cat) {
		
		$k = 0;
		
		$w = 0;
		
		$rs = $cat;
		
		$arr = array();   //left
		
		$index = array(); //right
		
		for($i = 0; $i<count($rs); $i++) {
			
			$rs[$i]['childs'] = array();
			
			//--查找二级分类
						
			for ($j = 0; $j < count($rs); $j++) {
				
				//--分析是否有子节点，如果有则 放入缓存数组
				
				if($rs[$i]['id'] == $rs[$j]['pid']&& $rs[$j]['child'] == 2) {
					
					array_push($rs[$i]['childs'], $rs[$j]);
					
					$rs[$j]['flag'] = 1;
					
					//--压入一个缓存数组的索引到数组里面
					
					array_push($index,$j);
					
					$k++;
				
				}else if($rs[$j]['child'] == 3 && isset($rs[$i]['flag'])) {
					
					//--通过深度去计算是否有子节点
					
					for($s = 0; $s<count($rs); $s++) {
						
						if(isset($rs[$s]['childs'])) {
							
							$child_length = count($rs[$s]['childs']);
							
							//--如果有则加入到结果数组中
							
							if($child_length > 0 ) {
								
								for($x = 0; $x<$child_length; $x++) {
	
									if($rs[$s]['childs'][$x]['id'] == $rs[$j]['pid']){
										
										$rs[$s]['childs'][$x]['childs'][$j] = $rs[$j];
										
										array_push($index,$j);
									
									}
								
								}
							
							}
						
						}
					
					}
					
				}
	
			}
			//--父节点			
			$arr[$i] = $rs[$i];
		}
		//--删除已放入的数组
		for($k = 0; $k<count($index) ; $k++) {
			
			$r = $index[$k];
			
			unset($rs[$r]);
			
		}
		
		return $rs;
	}
}