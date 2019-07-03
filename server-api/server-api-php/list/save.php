<?php

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

//保存列表的接口

$userId  = array_key_exists('userId', $_REQUEST) ? $_REQUEST['userId'] : 0;
$listType  = array_key_exists('listType', $_REQUEST) ? $_REQUEST['listType'] : -1;
$roomId = array_key_exists('roomId', $_REQUEST) ? $_REQUEST['roomId'] : 0;
$data = array_key_exists('data', $_REQUEST) ? $_REQUEST['data'] : 0;



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