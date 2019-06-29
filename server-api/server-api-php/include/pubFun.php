<?php



function echo_1($data, $exit = 1){	
	$retArr = array('status' => '1', 'data' => $data);
	$json   = json_encode($retArr, JSON_UNESCAPED_UNICODE);	
	echo $json;		
	if($exit == 1){
		exit;
	}	
}

function echo_0($msg, $data = errcode_unkown,  $exit = 1){	
	logf($msg);
	$retArr = array('status' => '0', 'data' => $data);
	$json   = json_encode($retArr);	
	echo $json;	
	if($exit == 1){
		exit;
	}	
}

function logf($data){	
	$fp = fopen(log_file, "a+");//读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
	$time = date('Y-m-d H:i:s'); 
	fwrite($fp, $time.'  '.$data."\r\n");//记得a+w
	fclose($fp);
	
}


function addSuffix($ids){	
	$ids_arr = explode(",", $ids);
	$id_suffix_arr = array();
	foreach($ids_arr as $id){
		array_push($id_suffix_arr, $id.'_0');
	}
	$ids_suffix = implode(',', $id_suffix_arr);
	return $ids_suffix;
}


//获取前缀
function getPrefix($prefix_suffix){	
	$index  = strpos($prefix_suffix, "_", 0); 
	if($index){		
		$prefix = substr($prefix_suffix, 0, $index);
		return $prefix;
	}	
}

//获取后缀
function getSuffix($prefix_suffix){	
	$index  = strpos($prefix_suffix, "_", 0); 
	if($index){
		$suffix  = substr($prefix_suffix, $index+1); 			
		return $suffix;
	}	
}

