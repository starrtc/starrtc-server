<?php
//IM聊天室列表
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');


$ret = get_chatroom_list();
if($ret['ret'] != 0){
	echo_0('get_chatroom_list_failed:'.$ret['ret']);
}

echo_1($ret['data']);


function get_chatroom_list(){
	global $g_writeMdb;
	$retArr = array();	
	try{			
		$sql = "select roomId, name, userId from im_chatroom_lists order by id desc";	
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;    
        } 
		if($pstmt->execute()){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);	
			
			$info   = array();
			$index  = 0;
			for($i = 0; $i < $resNum; $i++){			
				$roomId  = $result[$i][0];				
				$name    = $result[$i][1];				
				$userId  = $result[$i][2];				
				
				$itemArr = array();					
				$itemArr['ID']      = $roomId;	
				$itemArr['Name']    = $name;	
				$itemArr['Creator'] = $userId;	
				
				
				$info[$index++] = $itemArr;
			}		
			
			$data = array();				
			$data['list']   = $info;	
		
			$retArr['ret']  = 0;
			$retArr['data'] = $info;					 
			return $retArr;					
		}else{
			$retArr['ret'] = 13;return $retArr;	
		}    
	}catch(PDOException $e){	
		$retArr['ret'] = 11;return $retArr;	
	}
	$retArr['ret'] = 10;return $retArr;	
}
