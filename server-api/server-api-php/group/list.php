<?php 
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

//获取群列表，如果传了userId,则获取自已的群列表，不传则获取全部的群
$userId  = array_key_exists('userId',  $_REQUEST) ? $_REQUEST['userId'] : 0;	   

logf("获取群列表:$userId");


if(empty($userId)){
	$ret = get_all_group_list();
	if($ret['ret'] != 0){	
		echoErr('get_group_list_failed:'.$ret['ret']);
	}	
	echoK_zh($ret['data']);
}else{
	$ret = get_my_group_list($userId);
	if($ret['ret'] != 0){	
		echoErr('get_group_list_failed:'.$ret['ret']);
	}	
	echoK_zh($ret['data']);
}






function get_my_group_list($userId){
	global $g_writeMdb;
	$retArr = array();
	try{		
		$sql = "select groupList from userGroup where userId = ? limit 1";			
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        } 
		if($pstmt->execute(array($userId))){ 
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			if($resNum == 0){
				$data = array();
				$retArr['ret']  = 0;
				$retArr['data'] = $data;
				return $retArr; 		
			}									
			$groupList = trim($result[0][0]);			
			if(!empty($groupList)){
				$groupArr     = explode(",", $groupList);	
				$pureGroupArr = array();				
				foreach($groupArr as $v){
					$v = getPrefix($v);
					array_push($pureGroupArr, $v);			
				}
				
				//TODO 可不返回群信息，如果需要可单独请求
				
				$info     = array();
				$index    = 0;
				foreach ($pureGroupArr as $groupId){
					$itemArr = array();	
					$sql = "select groupName, creator from groups where id = ? limit 1";	
					if(!($pstmt = $g_writeMdb->prepare($sql))){
						$retArr['ret'] = 14;return $retArr;
					} 						
					if($pstmt->execute(array($groupId))){
						$result = $pstmt->fetchAll();        
						$resNum = count($result);	
						if($resNum == 1){									
							$itemArr['groupName'] = urlencode($result[0][0]);
							$itemArr['creator']   = $result[0][1];											
							$itemArr['groupId']   = $groupId;											
						}else{
							$retArr['ret'] = 20;return $retArr;//该群不存在											
						}	
					}else{
						$retArr['ret'] = 15;return $retArr;
					}					
					$info[$index++] = $itemArr;
				}
			
				$retArr['ret']  = 0;
				$retArr['data'] = $info;
				return $retArr; 	
			}else{//没有群
				$data = array();
				$retArr['ret']  = 0;
				$retArr['data'] = $data;
				return $retArr; 				
			}
		}else{
			$retArr['ret'] = 13;return $retArr;
		}
	}catch(PDOException $e){
		$retArr['ret'] = 11;return $retArr;
	}	
	$retArr['ret'] = 10;return $retArr;
}




function get_all_group_list(){
	global $g_writeMdb;			
	$retArr = array();	
	try{			
		$sql = "select id, groupName, creator from groups";	
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;    
        } 
		if($pstmt->execute()){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);	
			
			$info  = array();
			$index = 0;
					
			for($i = 0; $i < $resNum; $i++){			
				$groupId   = $result[$i][0];				
						
				$groupName = $result[$i][1];					
				$userId   = $result[$i][2];		
				
				$item = array();				
				$item['groupId']   = $groupId;
				$item['groupName'] = urlencode($groupName);
				$item['creator']   = $userId;
				
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

