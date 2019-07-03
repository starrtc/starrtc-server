<?php
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

//直接给前端用的api，用于获取列表

//listTypes：保存列表时自定义的类型参数列表，可以传1，也可以传多种类型的组合值，如1，2（用英文逗号分隔）
$listTypes = array_key_exists('listTypes', $_REQUEST) ? $_REQUEST['listTypes'] : -1;
//userId 是可选参数，如果userId有值，说明是获取自已的channel列表，没有值是获取所有的channel。
$userId    = array_key_exists('userId', $_REQUEST) ? $_REQUEST['userId'] : 0;
if($listTypes == -1){
	echoErr('missing args');
}	


$ret = get_list($userId, $listTypes);
if($ret['ret'] != 0){
	echoErr('get_list:'.$ret['ret']);
}
echoK($ret['data']);



function get_list($userId, $listTypes){
	global $g_writeMdb;			
	$retArr = array();	
	try{		
		$sql = '';
		if(empty($userId)){
			$sql = sprintf("select roomId, userId, data from list where type in (%s) order by id desc", $listTypes);	
		}else{
			$sql = sprintf("select roomId, userId, data from list where type in (%s) and userId = %s order by id desc", $listTypes, $userId);	
		}
		
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;    
        } 
		if($pstmt->execute()){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);	
			
			$info  = array();
			$index = 0;
					
			for($i = 0; $i < $resNum; $i++){			
				$roomId   = $result[$i][0];				
				$userId   = $result[$i][1];				
				$roomName = $result[$i][2];					
				
				
				$item = array();				
				$item['roomId']    		= $roomId;
				$item['creator']   		= $userId;
				$item['data'] = $roomName;
				$info[$index++]   = $item;						
				
			}		
						
						
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
