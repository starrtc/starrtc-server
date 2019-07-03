<?php

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

//删除列表的接口


$userId  = array_key_exists('userId', $_REQUEST) ? $_REQUEST['userId'] : 0;
$listType  = array_key_exists('listType', $_REQUEST) ? $_REQUEST['listType'] : -1;
$roomId = array_key_exists('roomId', $_REQUEST) ? $_REQUEST['roomId'] : 0;


$ret = del_list($userId, $listType, $roomId);
if($ret != 0){
	echoErr('del_list_failed:'.$ret);
}
echoK('success');




function del_list($userId, $listType, $roomId){	
	global $g_writeMdb;		
	try{	
		$sql = "delete from `list` where `userId` = ? and type = ? and roomId = ? limit 1";			
		if(!($pstmt = $g_writeMdb->prepare($sql))){         
            return 12;    
        } 
		if($pstmt->execute(array($userId, $listType, $roomId))){			
			return 0;
		}else{
			return 13;
		}		
	}catch(PDOException $e){
		return 11;
	}	
	return 10;	
}