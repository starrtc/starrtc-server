<?php
//后台主动删除群

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/group.php');
require_once($dir . '/include/group_del.php');


$userId    = 'system'; //也可以是系统里面注册的其它用户
$groupId   = 100457;


$ret = deleteGroup($userId, $groupId);	
if($ret != 0){	
	echoErr('deleteGroup_failed:'.$ret); 		
}		
		
		
$groupList  = ''; //不传groupList表示清空这个群的成员	
$ignoreList = '';
$ret = syncGroupList($groupId, $groupList, $ignoreList);			

$data = json_decode($ret, TRUE);
if($data['status'] != 1){	
	echoErr('群创建失败');	
}
echoK('success'); 
