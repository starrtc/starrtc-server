<?php
//后台主动 删除群成员

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/group.php');
require_once($dir . '/include/group_quit.php');


//希望从群内删除的成员列表，用逗号分隔，如果删除单个用户，则没有逗号。

//TODO 可检查 是不是群主,如果不是可以不让其踢人，同时可以不让群主踢自已

$groupId = 100457;
$removeUsers    = '524048';
$removeUsersArr = explode(",", $removeUsers);
foreach($removeUsersArr as $userId){
	$ret = quitGroup($userId, $groupId);
	if($ret != 0){	
		echoErr('quitGroup_failed:'.$ret); 		
	}			
}



$ret = delUsersFromGroup($groupId, $removeUsers);
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
		echoErr('delUsersFromGroup_failed'); 	
	}
}


echoK('success'); 
