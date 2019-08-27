<?php
//AEC接口  
//只能返回特定格式json:{"status":"x","data":"xxx"}
//其中status只能返回0和1，其中0为失败, 请使用字符串的0和1


//参见 https://docs.starrtc.com/zh-cn/docs/aec-index.html

//author: admin#elesos.com

$aec_dir = dirname(__FILE__);
require_once($aec_dir . '/config.php');
require_once($aec_dir . '/include/room.php');
require_once($aec_dir . '/include/group.php');
require_once($aec_dir . '/include/group_create.php');
require_once($aec_dir . '/include/group_del.php');
require_once($aec_dir . '/include/group_join.php');
require_once($aec_dir . '/include/group_quit.php');
require_once($aec_dir . '/include/channel.php');
require_once($aec_dir . '/include/user.php');

$data = array_key_exists('data', $_REQUEST) ? $_REQUEST['data'] : 0;//接收服务端程序传过来的数据
if(empty($data)){
	echo_0('missing args', errcode_missing_args);
}

$dataArr = json_decode($data, TRUE);
if(!is_array($dataArr)){
	echo_0("json is invalid:$data");
}

logf($data);

$action = array_key_exists('action', $dataArr) ? $dataArr['action'] : 0;
if(empty($action)){
	echo_0('action is empty');
}






save_online_user($dataArr);
process_voip_event($action,     $dataArr);
process_chatroom_event($action, $dataArr);
process_group_event($action, 	$dataArr);
process_channel_event($action, 	$dataArr);
process_proxy_event($action, 	$dataArr);
process_other_event($action, 	$dataArr);


echo_0('unkown action:'.$action);



function save_online_user($dataArr){//记录在线用户
	$userId = array_key_exists('userId', $dataArr)  ? $dataArr['userId']  : 0;
	_save_online_user($userId);		
}





//=========================VOIP(一对一)事件通知==================
//https://docs.starrtc.com/zh-cn/docs/aec-voip.html
function process_voip_event($action, $dataArr){
	$userId    = array_key_exists('userId', $dataArr)  ? $dataArr['userId']    : 0;
	
	if(!strcasecmp($action, 'AEC_VOIP_USER_ONLINE')){//申请voip通话
		//TODO： 可检查用户余额是否足够  
		
		// {"ts":"1561083201","action":"AEC_VOIP_USER_ONLINE","userId":"892500","userId2":"500660","time":"1561083201"}
		$userId2    = array_key_exists('userId2', $dataArr) ? $dataArr['userId2']    : 0;
		logf("$userId 请求与 $userId2 进行通话");
		echo_1('success');	//返回1表示允许此次通话	
	}

	if(!strcasecmp($action, 'AEC_VOIP_USER_PLAYING')){//voip通话正在进行中，每1分钟调用一次
		//用户通话时此事件每分钟回调一次
		//TODO：可以在此对用户的余额进行判断，如果余额不足，可以返回0断开他们俩的通话
		
		//还可在此统计通话时长
		
		//{"ts":"1561083596","action":"AEC_VOIP_USER_PLAYING","userId":"892500","userId2":"500660","time":"1561083596"}
		$userId2    = array_key_exists('userId2', $dataArr) ? $dataArr['userId2']    : 0;
		logf("$userId 与 $userId2 仍在通话中");
		echo_1('success');		
	}

	if(!strcasecmp($action, 'AEC_VOIP_USER_HANGUP')){//voip挂断
		//TODO
		
		//{"ts":"1561083203","action":"AEC_VOIP_USER_HANGUP","userId":"892500","userId2":"500660","hangupUserId":"500660","time":"1561083203"}
		$hangupUserId    = array_key_exists('hangupUserId', $dataArr) ? $dataArr['hangupUserId']    : 0;
		logf("$hangupUserId 挂断了通话");
		echo_1('success');		
	}
}



//===================聊天室事件通知===============
// https://docs.starrtc.com/zh-cn/docs/aec-chatroom.html
function process_chatroom_event($action, $dataArr){
	$userId    = array_key_exists('userId', $dataArr)    ? $dataArr['userId']    : 0;
	$roomId    = array_key_exists('roomId',         $dataArr) ? $dataArr['roomId'] : '';
	if(!strcasecmp($action, 'AEC_CHATROOM_CREATE')){//新建聊天室
		//TODO
		
		//{"ts":"1561085008","action":"AEC_CHATROOM_CREATE",
		//"userId":"892500","roomId":"a4a8_KS9sWt36ttn","roomType":"CHAT_ROOM_TYPE_PUBLIC",
		//"conCurrentNumber":"100","userDefineData":"666"}
		//其中 userDefineData 是客户端创建聊天室时传的参数，目前传的是聊天室的名字，以后可以传json.
		
		
		$roomType     = array_key_exists('roomType',         $dataArr) ? $dataArr['roomType'] : '';
		$conCurrentNumber = array_key_exists('conCurrentNumber', $dataArr) ? $dataArr['conCurrentNumber'] : '';// 最大人数
		
		$userDefineData   = rawurldecode(array_key_exists('userDefineData',   $dataArr) ? $dataArr['userDefineData'] : '');		
		$roomName = $userDefineData;//目前自定义字段里面传的是名称		
		if(empty($roomName)){
			echo_0('invalid roomName');
		}	
		if(!strcasecmp($roomType,      'CHAT_ROOM_TYPE_PUBLIC')){
			$roomType = CHAT_ROOM_TYPE_PUBLIC;
		}elseif(!strcasecmp($roomType, 'CHAT_ROOM_TYPE_LOGIN')){
			$roomType = CHAT_ROOM_TYPE_LOGIN;	
		}
		logf("$userId 请求新建聊天室:$roomName");
		
		//TODO 可以检查userId的权限，以确定他是否有权限创建聊天室
		$ret = create_chat_room($userId, $roomId, $roomName, $roomType, $conCurrentNumber);
		if($ret != 0){	
			echo_0("create_chatroom_failed:$ret");		
		}		
		echo_1('create_chatroom_success');		
	}
	

	if(!strcasecmp($action, 'AEC_CHATROOM_DELETE')){//删除聊天室	
		//TODO:可检查userId的权限，比如是不是聊天室的创建者
		
		$ret = delete_chat_room($userId, $roomId);
		if($ret != 0){	
			echo_0("delete_chatroom_failed:$ret");	
		}				
		logf("$userId 请求删除聊天室");
		echo_1('delete_chatroom_success');		
	}


	if(!strcasecmp($action, 'AEC_CHATROOM_IS_EXIST')){//查询聊天室是否存在
		//TODO
		logf("查询聊天室 $roomId 是否存在");
		$ret = isRoomIdExist($roomId);
		if($ret['ret'] != 0){	
			if($ret['ret'] == 14){
				echo_0("chatroom is not exist");
			}
			echo_0('isRoomIdExist:'.$ret['ret']);
		}
		
		$roomInfo = $ret['data'];
		//data字段需要返回房间创建者和房间的人数上限，用逗号分隔。
		$data = $roomInfo['userId'].','.$roomInfo['conCurrentNumber']; 		
		echo_1($data);			
	}
	
	if(!strcasecmp($action, 'AEC_CHATROOM_SEND_MSG')){
		//TODO 目前未开放此功能
		//用户每发一条消息都会回调
		//开放后，可以在此检查用户余额，如果没钱，不让发消息
		//可以在此针对每一条消息对用户进行扣费
		
		
	}	
}


//===================群事件通知===============
// https://docs.starrtc.com/zh-cn/docs/aec-group.html
function process_group_event($action, $dataArr){
	$userId    = array_key_exists('userId', $dataArr)    ? $dataArr['userId']    : 0;
	
	if(!strcasecmp($action, 'AEC_GROUP_CREATE')){//创建群
		//TODO: 比如检查用户是否有权限创建群		
		/* $ret = canCreateGroup($userId);
		if($ret != 0){
			echo_0('can_not_CreateGroup'); 		
		} */
		
		logf("$userId 想创建群");
		// {"ts":"1561096441","action":"AEC_GROUP_CREATE","userId":"892500","addUsers":"892500","userDefineData":"888"}
		
		//addUsers :用逗号分开的群成员列表，里面已经包含了创建者。
		$addUsers       = array_key_exists('addUsers',   $dataArr) ? $dataArr['addUsers'] : '';
		$userDefineData = rawurldecode(array_key_exists('userDefineData',   $dataArr) ? $dataArr['userDefineData'] : '');
		$groupName      = $userDefineData;		//目前只传了群名，后面可以传自定义json	
		
		$ret = createGroup($userId, $groupName, $addUsers);
		if($ret['ret'] != 0){	
			echo_0('createGroup failed:'.$ret['ret']); 		
		}		
		$groupId = $ret['data']['groupId'];		
		echo_1($groupId);	
	}
	

	if(!strcasecmp($action, 'AEC_GROUP_SYNC_ALL')){
		//TODO
		
		logf("服务端重启了，请求同步全部群成员");
		$groupId    = array_key_exists('groupId', $dataArr)    ? $dataArr['groupId'] : 0;		
		$ret = getGroupList($groupId);
		if($ret['ret'] != 0){
			echo_0('get GroupList err'.$ret['ret']);	
		}

		$data = array();
		if(!empty($ret['data']['groupList'])){// groupList表示这个群的所有群成员，用逗号分开。
			$data['groupList']  = $ret['data']['groupList'];
		}
		if(!empty($ret['data']['ignoreList'])){//ignoreList为可选参数，表示对该群开启了消息免打扰的所有群成员，用逗号分开。
			$data['ignoreList'] = $ret['data']['ignoreList'];
		}	
		echo_1($data);			
	}
	
	if(!strcasecmp($action, 'AEC_GROUP_DEL')){//删除群
		//TODO 表示用户想要删除群，可在此判断用户是否有删除权限，比如是否为创建者。如果有权限，可删除您服务器里面的群相关数据。
		$groupId    = array_key_exists('groupId', $dataArr)    ? $dataArr['groupId'] : 0;	
		logf("$userId 想要删除群 $groupId");
		
		$ret = deleteGroup($userId, $groupId);	
		if($ret != 0){	
			echo_0('deleteGroup_failed:'.$ret); 		
		}		
		echo_1('deleteGroup_success');		
	}
	
	
	if(!strcasecmp($action, 'AEC_GROUP_ADD_USER')){	//新增群成员	
		$groupId    = array_key_exists('groupId', $dataArr)    ? $dataArr['groupId'] : 0;	
		//用户希望添加到该群的成员列表，用逗号分隔，如果添加单个用户，则没有逗号。
		$addUsers   = array_key_exists('addUsers',   $dataArr) ? $dataArr['addUsers'] : '';	
		
		logf("$userId 请求向群 $groupId 新增群成员: $addUsers");
		
		//TODO：可以判断 userId 是不是群里面的成员，如果不是群里面的成员，可以不让其邀请别人进群
		//或者判断userId是不是群的创建者，从而实现只允许创建者邀请别人进群
		$addUsersArr = explode(",", $addUsers);
		foreach($addUsersArr as $userId){
			$ret = joinGroup($groupId, $userId);
			if($ret != 0){	
				echo_0('join group failed:'.$ret); 		
			}	
		}
		echo_1('joinGroup_success');		
	}	

	if(!strcasecmp($action, 'AEC_GROUP_ADD_USER_AND_SYNC_ALL')){
		//TODO
		logf("请求新增群成员并同步全部群成员");
		$groupId    = array_key_exists('groupId',  $dataArr) ? $dataArr['groupId'] : 0;	
		//用户希望添加到该群的成员列表，用逗号分隔，如果添加单个用户，则没有逗号。
		$addUsers   = array_key_exists('addUsers', $dataArr) ? $dataArr['addUsers'] : '';			
		
		//TODO：可以判断userId是不是群里面的成员，如果不是群里面的成员，可以不让其邀请别人进群
		//或者判断userId是不是群的创建者，从而实现只允许创建者邀请别人进群
		
		$addUsersArr = explode(",", $addUsers);
		foreach($addUsersArr as $userId){
			$ret = joinGroup($groupId, $userId);
			if($ret != 0){	
				echo_0('join group failed:'.$ret); 		
			}	
		}
		
		
		$ret = getGroupList($groupId);
		if($ret['ret'] != 0){
			echo_0('get GroupList err'.$ret['ret']);	
		}

		$data = array();
		if(!empty($ret['data']['groupList'])){// groupList表示这个群的所有群成员，用逗号分开。
			$data['groupList']  = $ret['data']['groupList'];
		}
		if(!empty($ret['data']['ignoreList'])){//ignoreList为可选参数，表示对该群开启了消息免打扰的所有群成员，用逗号分开。
			$data['ignoreList'] = $ret['data']['ignoreList'];
		}	
		echo_1($data);			
	}
	
	if(!strcasecmp($action, 'AEC_GROUP_REMOVE_USER')){//删除群成员
		//TODO				
		$groupId    = array_key_exists('groupId',  $dataArr) ? $dataArr['groupId'] : 0;	
		//希望从群内删除的成员列表，用逗号分隔，如果删除单个用户，则没有逗号。
		$removeUsers   = array_key_exists('removeUsers',   $dataArr) ? $dataArr['removeUsers'] : '';
		logf("$userId 请求删除群 $groupId 中的成员: $removeUsers");	
		
		$removeUsersArr = explode(",", $removeUsers);
		//TODO 可检查userId是不是群主,如果不是可以不让其踢人，同时可以不让群主踢自已
		
		foreach($removeUsersArr as $userId){
			$ret = quitGroup($userId, $groupId);
			if($ret != 0){	
				echo_0('quitGroup_failed:'.$ret); 		
			}			
		}
		echo_1('quitGroup_success');	
	}
	
	
	if(!strcasecmp($action, 'AEC_GROUP_REMOVE_USER_AND_SYNC_ALL')){
		//TODO
		logf("请求删除群成员并同步全部群成员");
		
		$groupId    = array_key_exists('groupId',  $dataArr) ? $dataArr['groupId'] : 0;	
		//希望从群内删除的成员列表，用逗号分隔，如果删除单个用户，则没有逗号。
		$removeUsers   = array_key_exists('removeUsers',   $dataArr) ? $dataArr['removeUsers'] : '';
		logf("$userId 请求删除群 $groupId 中的成员: $removeUsers");	
		
		$removeUsersArr = explode(",", $removeUsers);
		//TODO 可检查userId是不是群主,如果不是可以不让其踢人，同时可以不让群主踢自已
		
		foreach($removeUsersArr as $userId){
			$ret = quitGroup($userId, $groupId);
			if($ret != 0){	
				echo_0('quitGroup_failed:'.$ret); 		
			}			
		}
		
		//同步群成员
		$ret = getGroupList($groupId);
		if($ret['ret'] != 0){
			echo_0('get GroupList err'.$ret['ret']);	
		}

		$data = array();
		if(!empty($ret['data']['groupList'])){// groupList表示这个群的所有群成员，用逗号分开。
			$data['groupList']  = $ret['data']['groupList'];
		}
		if(!empty($ret['data']['ignoreList'])){//ignoreList为可选参数，表示对该群开启了消息免打扰的所有群成员，用逗号分开。
			$data['ignoreList'] = $ret['data']['ignoreList'];
		}	
		echo_1($data);		
		
	}
	
	if(!strcasecmp($action, 'AEC_SET_GROUP_PUSH_IGNORE')){
		//TODO
		$groupId    = array_key_exists('groupId',  $dataArr) ? $dataArr['groupId'] : 0;	
		logf("$userId 想对群 $groupId 设置免打扰");
		$ret = pushIgnore($groupId, $userId, GROUP_DND);
		if($ret != 0){
			echo_0('pushIgnore failed:'.$ret);
		}
		
		echo_1('pushIgnore_success');		
	}
	
	
	
	if(!strcasecmp($action, 'AEC_SET_GROUP_PUSH_IGNORE_AND_SYNC_ALL')){
		//TODO
		logf("请求设置免打扰模式并同步群成员");
		$groupId    = array_key_exists('groupId',  $dataArr) ? $dataArr['groupId'] : 0;	
		$ret = pushIgnore($groupId, $userId, GROUP_DND);
		if($ret != 0){
			echo_0('pushIgnore failed:'.$ret);
		}
		//同步群成员
		$ret = getGroupList($groupId);
		if($ret['ret'] != 0){
			echo_0('get GroupList err'.$ret['ret']);	
		}

		$data = array();
		if(!empty($ret['data']['groupList'])){// groupList表示这个群的所有群成员，用逗号分开。
			$data['groupList']  = $ret['data']['groupList'];
		}
		if(!empty($ret['data']['ignoreList'])){//ignoreList为可选参数，表示对该群开启了消息免打扰的所有群成员，用逗号分开。
			$data['ignoreList'] = $ret['data']['ignoreList'];
		}	
		echo_1($data);				
	}
	
	if(!strcasecmp($action, 'AEC_UNSET_GROUP_PUSH_IGNORE')){
		//TODO		
		$groupId    = array_key_exists('groupId',  $dataArr) ? $dataArr['groupId'] : 0;	
		logf("$userId 想对群 $groupId 取消免打扰");
		
		$ret = pushIgnore($groupId, $userId, GROUP_PUSH);
		if($ret != 0){
			echo_0('pushIgnore failed:'.$ret);
		}		
		echo_1('pushIgnore_success');		
	}
	
	if(!strcasecmp($action, 'AEC_UNSET_GROUP_PUSH_IGNORE_AND_SYNC_ALL')){
		//TODO
		logf("请求取消免打扰并同步群成员");
		$groupId    = array_key_exists('groupId',  $dataArr) ? $dataArr['groupId'] : 0;	
		$ret = pushIgnore($groupId, $userId, GROUP_PUSH);
		if($ret != 0){
			echo_0('pushIgnore failed:'.$ret);
		}		
		
		//同步群成员
		$ret = getGroupList($groupId);
		if($ret['ret'] != 0){
			echo_0('get GroupList err'.$ret['ret']);	
		}

		$data = array();
		if(!empty($ret['data']['groupList'])){// groupList表示这个群的所有群成员，用逗号分开。
			$data['groupList']  = $ret['data']['groupList'];
		}
		if(!empty($ret['data']['ignoreList'])){//ignoreList为可选参数，表示对该群开启了消息免打扰的所有群成员，用逗号分开。
			$data['ignoreList'] = $ret['data']['ignoreList'];
		}	
		echo_1($data);			
			
	}	
}


//==============================直播事件通知========================
//https://docs.starrtc.com/zh-cn/docs/aec-live.html
function process_channel_event($action, $dataArr){	
	$userId    = array_key_exists('userId', $dataArr)    ? $dataArr['userId']    : 0;
	if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_GLOBAL_PUBLIC')){
		//TODO
		
		//请求创建公开的直播间，上传者和连麦者需要登录，观众不需要登录或其他权限即可观看直播。		
		
		//此直播间对应的聊天室ID，如果直播间无聊天功能，则没有roomId参数。
		$roomId           = array_key_exists('roomId', $dataArr) ? $dataArr['roomId'] : '';
		//直播间ID号
		$channelId        = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : '';
		$conCurrentNumber = array_key_exists('conCurrentNumber', $dataArr) ? $dataArr['conCurrentNumber'] : '';
		$extra            = array_key_exists('extra', $dataArr) ? $dataArr['extra'] : '';
		$specify          = array_key_exists('specify', $dataArr) ? $dataArr['specify'] : '';// 扩展字段，暂时未用
		
		logf("$userId 请求创建GLOBAL_PUBLIC直播流:$extra");	
		
		//TODO 可对该直播流的并发数进行控制，如500
		if($conCurrentNumber > 500 || $conCurrentNumber < 0){		// 0是不限制
			echo_0('conCurrentNumber_out_of_limit'); 
		}				
		
		$ret = canCreateChannel($userId);
		if($ret != 0){		
			echo_0('can_not_CreateChannel');
		}				
		
		$ret = create_channel($userId, $channelId, channelType_GLOBAL_PUBLIC, $roomId, relateType_ROOM_CHANNEL, $specify, $extra, $conCurrentNumber);    
		if($ret != 0){		
			echo_0('create channel failed:'.$ret);
		}	
		
		echo_1('GLOBAL_PUBLIC_create_success');	
	}
	if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_LOGIN_PUBLIC')){
		//TODO
		logf("$userId 请求创建LOGIN_PUBLIC直播流");
		//此直播间对应的聊天室ID，如果直播间无聊天功能，则没有roomId参数。
		$roomId           = array_key_exists('roomId', $dataArr) ? $dataArr['roomId'] : '';
		//直播间ID号
		$channelId        = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : '';
		$conCurrentNumber = array_key_exists('conCurrentNumber', $dataArr) ? $dataArr['conCurrentNumber'] : '';
		$extra            = array_key_exists('extra', $dataArr) ? $dataArr['extra'] : '';
		$specify            = array_key_exists('specify', $dataArr) ? $dataArr['specify'] : '';// 扩展字段，暂时未用
		
		//TODO 可对该直播流的并发数进行控制，如500
		if($conCurrentNumber > 500 || $conCurrentNumber < 0){		
			echo_0('conCurrentNumber_out_of_limit'); 
		}
		
		$ret = canCreateChannel($userId);
		if($ret != 0){		
			echo_0('can_not_CreateChannel');
		}	
			
		
		$ret = create_channel($userId, $channelId, channelType_LOGIN_PUBLIC, $roomId, relateType_ROOM_CHANNEL, $specify, $extra, $conCurrentNumber);    
		if($ret != 0){		
			echo_0('create channel:'.$ret);
		}
	
		
		echo_1('LOGIN_PUBLIC_create_success');	
	}
	
	
	if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_GROUP_PUBLIC')){	
		//TODO 可以检查用户权限，如只让群创建者发起直播
		//创建仅在群内才能观看的直播间，上传者、连麦者和观众都需要在这个群内才可参与或观看直播。
		$groupId           = array_key_exists('groupId', $dataArr) ? $dataArr['groupId'] : '';
		logf("$userId 请求在群 $groupId 内创建GROUP_PUBLIC直播流");
		echo_0('no_rights');	
	}
	
	//
	if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_GROUP_SPECIFY')){		
		$groupId           = array_key_exists('groupId', $dataArr) ? $dataArr['groupId'] : '';
		logf("$userId 请求在群 $groupId 内创建GROUP_SPECIFY直播流");
		echo_0('no rights'); 		
	}
	
	if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_LOGIN_SPECIFY')){	
		logf("LOGIN_SPECIFY");
		echo_0('no rights'); 		
	}
	
	if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_BROADCAST')){	
		
		//{"ts":"1561699571","action":"AEC_LIVE_CREATE_CHANNEL_BROADCAST",
		//"userId":"577175","roomId":"a4aDXK2lEWucjFTB","channelId":"Wz@NWuVjBI3taaCB","conCurrentNumber":"0","extra":"888"}
		
		$roomId           = array_key_exists('roomId', $dataArr) ? $dataArr['roomId'] : '';
		//直播间ID号
		$channelId        = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : '';
		$conCurrentNumber = array_key_exists('conCurrentNumber', $dataArr) ? $dataArr['conCurrentNumber'] : '';
		$extra            = array_key_exists('extra', $dataArr) ? $dataArr['extra'] : '';
		$specify            = array_key_exists('specify', $dataArr) ? $dataArr['specify'] : '';// 扩展字段，暂时未用
		
		logf("$userId 请求创建CHANNEL_BROADCAST广播");
		
		//TODO 可对该直播流的并发数进行控制，如500
		if($conCurrentNumber > 500 || $conCurrentNumber < 0){		
			echo_0('conCurrentNumber_out_of_limit'); 
		}
		
		$ret = canCreateChannel($userId);
		if($ret != 0){		
			echo_0('can_not_CreateChannel');
		}	
			
		
		$ret = create_channel($userId, $channelId, channelType_BROADCAST, $roomId, relateType_ROOM_CHANNEL, $specify, $extra, $conCurrentNumber);    
		if($ret != 0){		
			echo_0('create channel:'.$ret);
		}
			
		echo_1('BROADCAST_create_success');				
	}
	
	
	if(!strcasecmp($action, 'AEC_LIVE_APPLY_UPLOAD_CHANNEL')){
		//TODO
		
		logf("$userId 申请上传");
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;    
		if(empty($channelId)){
			echo_0('channelId is empty');
		}	
		
		
		$ret = get_channel_info($channelId);
		if($ret['ret'] != 0){
			if($ret['ret'] == 14){
				echo_0('channel not exist');
			}
			echo_0('get_channel_info_failed:'.$ret['ret']);
		}
		$channelInfo                = $ret['data'];	
		
				
		//TODO  检查是否有权限，比如创建者才能上传		
		/* $creator                = $channelInfo['userId'];	
		if(strcasecmp($creator, $userId)){
			echo_0('you are not the live creator');
		}		 */	
		
		$data = array();	
		$data['conCurrentNumber'] = $channelInfo['conCurrentNumber'];
		echo_1($data);		
	}	
	
	if(!strcasecmp($action, 'AEC_LIVE_SET_CHANNEL_UPLOADER')){
		//TODO 检查权限，返回1表示通过
		
		logf("设置 $userId 为上传者");
		
		echo_1('SET_CHANNEL_UPLOADER_success');	
	}
	if(!strcasecmp($action, 'AEC_LIVE_UNSET_CHANNEL_UPLOADER')){
		//TODO
		logf("取消 $userId 的上传权限");		
		echo_1('UNSET_CHANNEL_UPLOADER_success');	
	}
	
	if(!strcasecmp($action, 'AEC_LIVE_UPLOADER_DISCONNECT')){		
		logf("上传者 $userId 断开连接（离开）直播间");
		
		//TODO 检查是不是自己的 channel, 更新直播状态	
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;		
		$ret = get_channel_info($channelId);
		if($ret['ret'] != 0){
			if($ret['ret'] == 14){
				echo_0('channel not exist');
			}
			echo_0('get_channel_info_failed:'.$ret['ret']);
		}
		$channelInfo        = $ret['data'];
		
		$channel_creator    = $channelInfo['userId'];
		if($channel_creator == $userId){
			$ret = update_channel_state($channelId, NO_LIVE);
			if($ret != 0){
				echo_0('update_channel_state:'.$ret);
			}
		}			
		echo_1('DISCONNECT_success');	
	}
	
	if(!strcasecmp($action, 'AEC_LIVE_UPLOADER_UPLOADING')){
		//TODO
		//上传者正在上传 ,每分钟会回调一次此事件
		//视频服务没有与业务绑定,需要根据channelId判断该channel是属于群的直播流还是属于其它的直播流
		//更新直播状态
		logf("上传者 $userId 上传中");
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;
		
		$ret = update_channel_state($channelId, LIVING);
		if($ret != 0){
			echo_0('update_channel_state:'.$ret);
		}	
			
		
		//TODO 可检查用户，如果余额不足，可通过此事件终止用户继续直播。
		//echo_0("余额不足");		
		echo_1('success');	
	}
	if(!strcasecmp($action, 'AEC_LIVE_CLOSE_CHANNEL')){
		//TODO 检查权限
		
		logf("$userId 请求关闭直播流");
		echo_1('success');	
	}
	if(!strcasecmp($action, 'AEC_LIVE_DELETE_CHANNEL')){
		//TODO 检查userId是否为channel的创建者,以决定是否有权限删除
		
		logf("$userId 请求删除直播流");
		
		//删除channel	
		$ret = deleteChannelByUserId($userId, $channelId);
		if($ret != 0){					  	
			echo_0('deleteChannel_failed');				
		}
		echo_1('success');	
	}
	
	if(!strcasecmp($action, 'AEC_LIVE_USER_ONLINE')){//用户开始观看直播
		//TODO 检查用户余额
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;
		
		//TODO channelId有可能是群直播 或 非群直播
		logf("用户 $userId 开始观看直播");
		
		echo_1('USER_ONLINE_success');
	}
	
	if(!strcasecmp($action, 'AEC_LIVE_USER_PLAYING')){	//用户观看直播中，每分钟调用一次
		//TODO 可检查用户余额并扣费
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;
		logf("用户 $userId 还在观看直播中");
		echo_1('USER_PLAYING_success');
	}
	
	if(!strcasecmp($action, 'AEC_LIVE_USER_OFFLINE')){	//用户停止观看直播
		//TODO
		
		logf("用户 $userId 停止观看直播");
		echo_1('USER_OFFLINE_success');
	}
		
	
	if($action == 'AEC_LIVE_APPLY_DOWNLOAD_CHANNEL'){//申请下载直播流	
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;
		logf("用户 $userId 申请下载直播流");
		echo_1('success'); 	
	}	
}



//拉流 rtmp rtsp
function process_proxy_event($action, $dataArr){	
	if(!strcasecmp($action, 'AEC_LIVE_LIVEPROXY_CREATE_CHANNEL_GLOBAL_PUBLIC')){	
		
		//{"ts":"1561542285","action":"AEC_LIVE_LIVEPROXY_CREATE_CHANNEL_GLOBAL_PUBLIC",
		//"roomId":"a4aDZfdwsWuTLFkD","channelId":"Wz@NWuVj8Tx5aa4a","conCurrentNumber":"100","extra":"222"}
		$channelId  	  = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : '';
		$roomId  	  = array_key_exists('roomId', $dataArr) ? $dataArr['roomId'] : '';
		$conCurrentNumber = array_key_exists('conCurrentNumber', $dataArr) ? $dataArr['conCurrentNumber'] : 0;
		$specify 	      = array_key_exists('specify', $dataArr) ? $dataArr['specify'] : '';
		$extra   		  = array_key_exists('extra', $dataArr) ? $dataArr['extra'] : '';
		
		logf("请求创建LIVEPROXY_GLOBAL_PUBLIC:$extra");
		
		if($conCurrentNumber > 500 || $conCurrentNumber < 0){		
			echo_0('conCurrentNumber_out_of_limit'); 
		}
		
		$ret = get_room_info($roomId);	
		if($ret['ret'] != 0){			
			echo_0('get room info err:'.$ret['ret']);
		}	
		$userId            = $ret['data']['userId'];		
	
		$ret = create_channel($userId, $channelId, channelType_LIVEPROXY_GLOBAL_PUBLIC, $roomId, relateType_ROOM_CHANNEL, $specify, $extra, $conCurrentNumber);    
		if($ret != 0){		
			echo_0('create channel failed:'.$ret);
		}
		echo_1('LIVEPROXY_GLOBAL_PUBLIC_create_success');				
	}
	
	//{"action" : "AEC_LIVE_LIVEPROXY_DELETE_CHANNEL","channelId" : "xxx"}
	if(!strcasecmp($action, 'AEC_LIVE_LIVEPROXY_DELETE_CHANNEL')){
		logf("请求删除LIVEPROXY_CHANNEL");
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;
		$ret = deleteChannel($channelId);
		if($ret != 0){					  	
			echo_0('deleteChannel_failed');				
		}
		
		echo_1('LIVEPROXY_CHANNEL_delete_success');				
	}
	
	//{"action" : "AEC_LIVE_LIVEPROXY_CLOSE_CHANNEL","channelId" : "xxx"}
	if(!strcasecmp($action, 'AEC_LIVE_LIVEPROXY_CLOSE_CHANNEL')){
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;
		logf("请求关闭LIVEPROXY_CHANNEL");
		echo_1('LIVEPROXY_CHANNEL_close_success');	
		
	}
	//{"action" : "AEC_LIVE_LIVEPROXY_APPLY_UPLOAD_CHANNEL","channelId" : "xxx"}
	if(!strcasecmp($action, 'AEC_LIVE_LIVEPROXY_APPLY_UPLOAD_CHANNEL')){
		$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;
		//申请拉流转发
			
		$ret = get_channel_info($channelId);
		if($ret['ret'] != 0){
			if($ret['ret'] == 14){
				echo_0('channel not exist');
			}
			echo_0('get_channel_info_failed:'.$ret['ret']);
		}
		$channelInfo = $ret['data'];			
		
		$data = array();
		$data['conCurrentNumber'] = $channelInfo['conCurrentNumber'];

		echo_1($data);
	}	
}


//===============================其它事件通知==============
// https://docs.starrtc.com/zh-cn/docs/aec-other.html
function process_other_event($action, $dataArr){
	$userId    = array_key_exists('userId', $dataArr)    ? $dataArr['userId']    : 0;
	if(!strcasecmp($action, 'AEC_MSG_SERVER_GET_PUSH_MODE')){//获取某用户的推送模式
		//TODO
		
		//logf("获取用户 $userId 的推送模式");
		$pushmode = MSG_PUSH_MODE_ALL_ON;
		echo_1($pushmode);
	}

	if(!strcasecmp($action, 'AEC_MSG_SERVER_SET_PUSH_MODE')){//设置某用户的推送模式
		//TODO
		$pushMode = array_key_exists('pushMode', $dataArr) ? $dataArr['pushMode'] : '';//传数字
		logf("设置用户 $userId 的推送模式为 $pushMode");
		
		/* $ret = set_user_msg_push_mode($userId, $pushMode);
		if($ret != 0){
			echo_0('set_user_msg_push_mode_faild');     
		} */
		echo_1('success');
	}
	
	if(!strcasecmp($action, 'AEC_GROUP_PUSH_SYSTEM_MSG')){//推送系统消息到指定用户
		//{"action" : "AEC_GROUP_PUSH_SYSTEM_MSG","userId" : "xxx"}
		echo_0('no rights'); 	
	}
	
	if(!strcasecmp($action, 'AEC_GROUP_PUSH_SYSTEM_GROUP_MSG')){//推送群系统消息到指定群
		//{"action" : "AEC_GROUP_PUSH_SYSTEM_GROUP_MSG","groupId":"xxx","userId" : "xxx"}
		echo_0('no rights'); 	
	}	
}