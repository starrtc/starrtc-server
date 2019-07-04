<?php

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

//保存列表的接口


if (!isset($GLOBALS['HTTP_RAW_POST_DATA'])){
	$GLOBALS['HTTP_RAW_POST_DATA'] = file_get_contents('php://input');
}		
$postStr = $GLOBALS['HTTP_RAW_POST_DATA'];



$postArr = explode('&', $postStr);

$dataArr = array();
foreach($postArr as $v){
	$item = explode('=', $v);
	$key   = $item[0];
	$value = $item[1];
	$dataArr[$key] = $value;	
}


$userId  = array_key_exists('userId', $dataArr) ? $dataArr['userId'] : 0;
$listType  = array_key_exists('listType', $dataArr) ? $dataArr['listType'] : -1;
$roomId = array_key_exists('roomId', $dataArr) ? $dataArr['roomId'] : 0;
$data = array_key_exists('data', $dataArr) ? $dataArr['data'] : 0;



$ret = save_to_list($userId, $listType, $roomId, $data);
if($ret != 0){
	echoErr('save_to_list_failed:'.$ret);
}
echoK('success');




function save_to_list($userId, $listType, $roomId, $data){	
	global $g_writeMdb;		
	$ctime = date('Y-m-d H:i:s'); 		
	try{	
		$sql = "insert into list (userId, type, roomId, data, ctime) values (?,?,?,?,?)";
		if(!($pstmt = $g_writeMdb->prepare($sql))){           
            return 13;    
        } 
		if($pstmt->execute(array($userId, $listType, $roomId, $data, $ctime))){				
			return 0;
		}else{
			return 14;
		}		
	}catch(PDOException $e){
		return 11;
	}	
	return 10;
}