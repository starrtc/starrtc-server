<?php



function echo_1($data, $exit = 1){	
	$retArr = array('status' => '1', 'data' => $data);
	$json   = json_encode($retArr, JSON_UNESCAPED_UNICODE);	//JSON_UNESCAPED_UNICODE
	echo $json;		
	if($exit == 1){
		exit;
	}	
}

//返回给服务端程序的，用到字符0
function echo_0($msg, $data = errcode_unkown,  $exit = 1){	
	logf($msg);
	$retArr = array('status' => '0', 'data' => $data);
	$json   = json_encode($retArr);	
	echo $json;	
	if($exit == 1){
		exit;
	}	
}


//直接返回给前端的
function echoErr($data, $exit = 1){	
	logf($data);
	$retArr = array('status'=> 0, 'data'=>$data);	
	$json = json_encode($retArr);	
	echo $json;	
	if($exit == 1){
		exit;
	}	
}

//需要自已对data进行编码，如果是数组，需要自已对单个数组元素进行编码
function echoK($data, $exit = 1){		
	$retArr = array('status'=>1, 'data'=>$data);
	$json = json_encode($retArr);	
	echo $json;	
	if($exit == 1){
		exit;
	}	
}


function echoK_zh($data, $exit = 1){		
	$retArr = array('status'=>1, 'data'=>$data);
	$json = json_encode($retArr);	
	echo urldecode($json);	
	if($exit == 1){
		exit;
	}	
}

function echoDebug($data, $exit = 0){	
	echo '<pre>======<br/>';	
	print_r($data);
	echo '<br/>======</pre>';
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

function curl_post($url, $data){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1 );
	//curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);	
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}


