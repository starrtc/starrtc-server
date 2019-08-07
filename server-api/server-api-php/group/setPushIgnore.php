<?php
//后台主动 设置 免打扰：设置某人不接收群消息

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/group.php');



$groupId  = 100457;	
$ignoreList = '524048';
$usersArr = explode(",", $ignoreList);
foreach($usersArr as $userId){	
	$ret = pushIgnore($groupId, $userId, GROUP_DND);
	if($ret != 0){
		echoErr('pushIgnore failed:'.$ret);
	}
}

$ret = setPushIgnore($groupId, $ignoreList);
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
