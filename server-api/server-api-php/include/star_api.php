<?php


define('proxyUrl', 'http://demo.starrtc.com:19922/');



//push系统消息
function pushSystemMsgToUsers($msg, $digest, $toUsers){		
	$url = proxyUrl.'pushSystemMsgToUsers';	
	$data = array (			
		'msg'     => $msg,
		'digest'  => $digest, //摘要
		'toUsers' => $toUsers	 //	用户，用逗号隔开	
	);
	
	$ret = curl_post($url, $data);// 成功返回的是json {"status":"1"}
	return $ret;	
}


//push群系统消息
function pushGroupMsg($groupId, $msg){		
	$url = proxyUrl.'pushGroupMsg';	
	$data = array (			
		'groupId' => $groupId,			
		'msg' => $msg
	);
	$ret = curl_post($url, $data);
	return $ret;	
}


/////////////////////////////group 群操作   需要开启aec ////////////////////
//同步群成员
function syncGroupList($groupId, $groupList, $ignoreList){
	$url = proxyUrl.'syncGroupList';
	
	if(empty($groupList)){
		$data = array (
			'groupId'       => $groupId				
		);
	}else{
		if(empty($ignoreList)){
			$data = array (
			'groupId'      => $groupId,			
			'groupList'    => $groupList  //不传groupList表示清空这个群的成员		
			);
		}else{
			$data = array (
			'groupId'      => $groupId,			
			'groupList'    => $groupList,
			'ignoreList'   => $ignoreList
			);
		}		
	}

	$ret = curl_post($url, $data);
	return $ret;		
}

//添加群好友  
//需要先调用 同步群成员 ，服务端才有这个群的记录，然后才能调用 addUsersToGroup       
function addUsersToGroup($groupId, $addedUsers){		
	$url = proxyUrl.'addUsersToGroup';
	
	$data = array (
			'groupId' => $groupId,			
			'addedUsers' => $addedUsers
	);
	$ret = curl_post($url, $data);
	return $ret;	
}

//删除群好友
function delUsersFromGroup($groupId, $deledUsers){		
	$url = proxyUrl.'delUsersFromGroup';
	$data = array (
			'groupId' => $groupId,
			'deledUsers' => $deledUsers
	);
	
	$ret = curl_post($url, $data);
	return $ret;	
}



function setPushIgnore($groupId, $ignoreList){		
	$url = proxyUrl.'setPushIgnore';
	$data = array (
			'groupId' => $groupId,	
			'ignoreList' => $ignoreList
	);
		
	$ret = curl_post($url, $data);
	return $ret;	
}


function unsetPushIgnore($groupId, $ignoreList){		
	$url = proxyUrl.'unsetPushIgnore';
	$data = array (
			'groupId' => $groupId,			
			'ignoreList' => $ignoreList
	);
		
	$ret = curl_post($url, $data);
	return $ret;	
}


