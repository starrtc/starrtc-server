<?php
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

// 获取某个群的所有成员的userId与该群的免打扰状态
//返回 {"status":"x","data":{"userIdList":"userId1,userId2,xxx","isIgnore":"1"}}
//其中isIgnore为userId对该群设置的免打扰状态。
$userId = array_key_exists('userId', $_REQUEST) ? $_REQUEST['userId'] : 0;	
$groupId = array_key_exists('groupId', $_REQUEST) ? $_REQUEST['groupId'] : 0;	
if(empty($userId) || empty($groupId)){
	echoErr('missing args');
}


//TODO 检查是不是自已的群
$ret = get_group_memberlist($userId, $groupId);
if($ret['ret'] != 0){	
	echoErr('get_group_memberlist_failed:'.$ret['ret']);
}
echoK($ret['data']);


function get_group_memberlist($userId, $groupId){
	global $g_writeMdb;	
	$retArr = array();
    try{
		$sql = "select userList from groups where id = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        } 
		if($pstmt->execute(array($groupId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			if($resNum == 0){
				$retArr['ret'] = 14;return $retArr;
			}
		
			$userIdList = '';
			$isIgnore = 0;
			$userList = trim($result[0][0]);		
			if(!empty($userList)){				
				$memberArr = explode(",", $userList);
				$pureMemberArr = array();				
				foreach($memberArr as $v){		
					 //userId_ignoreState
					$prefix  = getPrefix($v); //get userId
					$suffix  = getSuffix($v); //get ignoreState
					
					if(!strcasecmp($prefix, $userId)){
						$isIgnore = $suffix;
					}					
					array_push($pureMemberArr, $prefix);
				}
				
				foreach ($pureMemberArr as $userId){	
					$userIdList = $userId .','. $userIdList;								
				}
				$userIdList   = rtrim($userIdList, ',');//去掉结尾的逗号				
				
			}
			
			$data = array();
			$data['userIdList']  = $userIdList;				
			$data['isIgnore']    = $isIgnore;				
			
			$retArr['ret']  = 0;
			$retArr['data'] = $data;return $retArr;			
		}else{
			$retArr['ret'] = 13;return $retArr;//查询失败
		}         
    }catch(PDOException $e){       
		$retArr['ret'] = 11;return $retArr;
    }
	$retArr['ret'] = 10;return $retArr;
}