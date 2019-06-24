<?php 
//群组列表（自己的群列表，不是所有的群）
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

$userid  = array_key_exists('userid',  $_REQUEST) ? $_REQUEST['userid'] : 0;	   
if(empty($userid)){
	echo_0('missing args');	
}


$ret = get_group_list($userid);
if($ret['ret'] != 0){	
	echo_0('get_group_list_failed:'.$ret['ret']);
}	
echo_1($ret['data']);


function get_group_list($userid){
	global $g_writeMdb;
	$retArr = array();
	try{
		$sql = "select groupList from userGroup where userId = ? limit 1";	
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        } 
		if($pstmt->execute(array($userid))){ 
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			if($resNum == 0){
				$retArr['ret'] = 16;return $retArr;		
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
					$sql = "select groupName, creator from groups where groupId = ? limit 1";	
					if(!($pstmt = $g_writeMdb->prepare($sql))){
						$retArr['ret'] = 14;return $retArr;
					} 						
					if($pstmt->execute(array($groupId))){
						$result = $pstmt->fetchAll();        
						$resNum = count($result);	
						if($resNum == 1){									
							$itemArr['groupName'] = $result[0][0];
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
				$retArr['ret'] = 17;return $retArr;								
			}
		}else{
			$retArr['ret'] = 13;return $retArr;
		}
	}catch(PDOException $e){
		$retArr['ret'] = 11;return $retArr;
	}	
	$retArr['ret'] = 10;return $retArr;
}

