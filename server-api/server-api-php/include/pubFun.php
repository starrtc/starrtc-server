<?php



function echo_1($data, $exit = 1){	
	$retArr = array('status' => '1', 'data' => $data);
	$json   = json_encode($retArr);	
	echo $json;	
	if($exit == 1){
		exit;
	}	
}

function echo_0($data, $exit = 1){	
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

