<?php
//获取群的成员列表
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');


$groupId = array_key_exists('groupId', $_REQUEST) ? $_REQUEST['groupId'] : 0;	
if(empty($groupId)){
	echo_0('missing args');
}


$ret = get_group_memberlist($groupId);
if($ret['ret'] != 0){	
	echo_0('get_group_memberlist_failed:'.$ret['ret']);
}

echo_1($ret['data']);




function get_group_memberlist($groupId){
	global $g_writeMdb;
	$retArr = array();
	try{
		$sql = "select userList from groups where groupId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
           $retArr['ret'] = 12;return $retArr;	
        } 
		
		if($pstmt->execute(array($groupId))){
			$result = $pstmt->fetchAll();
			$resNum = count($result);	
			if($resNum == 1){
				$userList     = $result[0][0];	
				
				$info = array();
				$index = 0;
				if(!empty($userList)){//不应该为空，因为至少有创建者	
					$memberArr       = explode(",", $userList);
					$pureUserListArr = array();
					foreach($memberArr as $v){//去后缀标记
						$v = getPrefix($v);
						array_push($pureUserListArr, $v);
					}	
					foreach ($pureUserListArr as $userId){
						$itemArr = array();				
						$itemArr['userId']     = $userId;							
						$info[$index++] = $itemArr;
					}					
				
					$retArr['ret']  = 0;
					$retArr['data'] = $info;
					return $retArr;  	
				}else{
					$retArr['ret'] = 15;return $retArr;
				}				
			}else{
				$retArr['ret'] = 14;return $retArr;
			}					
		}else{
			$retArr['ret'] = 13;return $retArr;		
		}
	}catch(PDOException $e){
		$retArr['ret'] = 11;return $retArr;
	}
    $retArr['ret'] = 10;return $retArr;
}