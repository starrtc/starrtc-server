<?php
//后台主动创建群

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/group.php');
require_once($dir . '/include/group_create.php');


$userId    = 'system'; //也可以是系统里面注册的其它用户
$groupName = '测试群';




$addUsers = $userId; //addUsers :用逗号分开的群成员列表，里面已经包含了创建者
$ret = createGroup($userId, $groupName, $addUsers);
if($ret['ret'] != 0){	
	echoErr('createGroup failed:'.$ret['ret']); 		
}		
$groupId = $ret['data']['groupId'];		

$groupList  = $userId;
$ignoreList = '';
$ret = syncGroupList($groupId, $groupList, $ignoreList);

$data = json_decode($ret, TRUE);
if($data['status'] != 1){	
	echoErr('群创建失败');	
}
echoK('success'); 
