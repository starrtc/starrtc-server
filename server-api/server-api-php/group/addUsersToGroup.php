<?php
//后台主动 添加群成员

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/group.php');
require_once($dir . '/include/group_join.php');




$addUsers = '524048';	//要添加进的群的所有用户id，用逗号隔开
$groupId  = 100457;		


$addUsersArr = explode(",", $addUsers);
foreach($addUsersArr as $userId){
	$ret = joinGroup($groupId, $userId);
	if($ret != 0){	
		echoErr('join group failed:'.$ret); 		
	}	
}

$ret = addUsersToGroup($groupId, $addUsers);
$data = json_decode($ret, TRUE);
if($data['status'] != 1){	
	if($ret['data'] == 'GROUPPUSH_ERRID_GROUPID_NOT_SYNC'){
		
		$ret = getGroupList($groupId);
		if($ret['ret'] != 0){
			echoErr('get GroupList err'.$ret['ret']);	
		}
		
		$groupList = $ignoreList = '';
		if(!empty($ret['data']['groupList'])){// groupList表示这个群的所有群成员，用逗号分开。
			$groupList = $ret['data']['groupList'];
		}
		if(!empty($ret['data']['ignoreList'])){//ignoreList为可选参数，表示对该群开启了消息免打扰的所有群成员，用逗号分开。
			$ignoreList = $ret['data']['ignoreList'];
		}			
		
		$ret = syncGroupList($groupId, $groupList, $ignoreList);
		$data = json_decode($ret, TRUE);
		if($data['status'] != 1){	
			echoErr('失败');	
		}		
	}else{
		echoErr('addUsersToGroup_failed'); 	
	}	
}

echoK('success'); 
