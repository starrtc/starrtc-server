<?php
//AEC接口  
//只能返回特定格式json:{"status":"x","data":"xxx"}
//其中status只能返回0和1，其中0为失败, 请使用字符串的0和1


//参见 https://docs.starrtc.com/zh-cn/docs/aec-index.html

//author: admin@elesos.com

$aec_dir = dirname(__FILE__);
require_once($aec_dir . '/config.php');
require_once($aec_dir . '/include/room.php');
require_once($aec_dir . '/include/group_create.php');
	

$data = rawurldecode(array_key_exists('data', $_REQUEST) ? $_REQUEST['data'] : 0);//接收服务端程序传过来的数据
if(empty($data)){
	echo_0('missing args');
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



$groupId   = array_key_exists('groupId', $dataArr)   ? $dataArr['groupId']   : 0;
$roomId    = array_key_exists('roomId', $dataArr)    ? $dataArr['roomId']    : 0;

$channelId = array_key_exists('channelId', $dataArr) ? $dataArr['channelId'] : 0;


process_voip_event($action, $dataArr);
process_chatroom_event($action, $dataArr);
process_group_event($action, $dataArr);



//===================群事件通知===============
// https://docs.starrtc.com/zh-cn/docs/aec-group.html
function process_group_event($action, $dataArr){
	$userId    = array_key_exists('userId', $dataArr)    ? $dataArr['userId']    : 0;
	
	if(!strcasecmp($action, 'AEC_GROUP_CREATE')){
		//TODO: 比如检查用户是否有权限创建群
		
		logf("$userId 想创建群");
		// {"ts":"1561096441","action":"AEC_GROUP_CREATE","userId":"892500","addUsers":"892500","userDefineData":"888"}
		
		//addUsers :用逗号分开的群成员列表，里面已经包含了创建者。
		$addUsers       = array_key_exists('addUsers',   $dataArr) ? $dataArr['addUsers'] : '';
		$userDefineData = array_key_exists('userDefineData',   $dataArr) ? $dataArr['userDefineData'] : '';
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
	
	if(!strcasecmp($action, 'AEC_GROUP_DEL')){
		//TODO 表示用户想要删除群，可在此判断用户是否有删除权限，比如是否为创建者。如果有权限，可删除您服务器里面的群相关数据。
		$groupId    = array_key_exists('groupId', $dataArr)    ? $dataArr['groupId'] : 0;	
		logf("$userId 想要删除群 $groupId");
		
		$ret = deleteGroup($userId, $groupId);	
		if($ret != 0){	
			echo_0('deleteGroup_failed:'.$ret); 		
		}		
		echo_1('deleteGroup_success');		
	}
	
	
	
	
	
	
	
}











if(!strcasecmp($action, 'AEC_GROUP_ADD_USER')){
	//TODO
	logf("新增群成员");
	echo_1('success');		
}


if(!strcasecmp($action, 'AEC_GROUP_ADD_USER_AND_SYNC_ALL')){
	//TODO
	logf("新增群成员并同步全部群成员");
	echo_0('没有权限');	
}

if(!strcasecmp($action, 'AEC_GROUP_REMOVE_USER')){
	//TODO
	logf("删除群成员");
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_GROUP_REMOVE_USER_AND_SYNC_ALL')){
	//TODO
	logf("删除群成员并同步全部群成员");
	echo_0('没有权限');		
}


if(!strcasecmp($action, 'AEC_SET_GROUP_PUSH_IGNORE')){
	//TODO
	logf("设置免打扰");
	echo_1('success');		
}


if(!strcasecmp($action, 'AEC_SET_GROUP_PUSH_IGNORE_AND_SYNC_ALL')){
	//TODO
	logf("设置免打扰模式并同步群成员");
	echo_0('没有权限');		
}


if(!strcasecmp($action, 'AEC_UNSET_GROUP_PUSH_IGNORE')){
	//TODO
	logf("取消免打扰");
	echo_1('success');		
}


if(!strcasecmp($action, 'AEC_UNSET_GROUP_PUSH_IGNORE_AND_SYNC_ALL')){
	//TODO
	logf("取消免打扰并同步群成员");
	echo_0('没有权限');			
}


//==============================直播事件通知========================
//https://docs.starrtc.com/zh-cn/docs/aec-live.html
if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_GLOBAL_PUBLIC')){
	//TODO
	logf("创建GLOBAL_PUBLIC直播流");	
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_LOGIN_PUBLIC')){
	//TODO
	logf("创建LOGIN_PUBLIC直播流");
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_LIVE_CREATE_CHANNEL_GROUP_PUBLIC')){
	//TODO
	logf("创建GROUP_PUBLIC直播流");
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_LIVE_APPLY_UPLOAD_CHANNEL')){
	//TODO
	
	logf("申请上传");
	echo_0('没有权限');	
}

if(!strcasecmp($action, 'AEC_LIVE_SET_CHANNEL_UPLOADER')){
	//TODO
	
	logf("设置上传者");
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_LIVE_UNSET_CHANNEL_UPLOADER')){
	//TODO
	
	logf("取消上传权限");
	echo_1('success');	
}


if(!strcasecmp($action, 'AEC_LIVE_UPLOADER_DISCONNECT')){
	//TODO
	
	logf("上传者断开连接（离开）");
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_LIVE_UPLOADER_UPLOADING')){
	//TODO
	
	logf("上传者正在上传");
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_LIVE_CLOSE_CHANNEL')){
	//TODO
	
	logf("关闭直播流");
	echo_1('success');	
}

if(!strcasecmp($action, 'AEC_LIVE_DELETE_CHANNEL')){
	//TODO
	
	logf("删除直播流");
	echo_1('success');	
}


if(!strcasecmp($action, 'AEC_LIVE_USER_ONLINE')){
	//TODO
	
	logf("用户开始观看直播");
	echo_1('success');
}

if(!strcasecmp($action, 'AEC_LIVE_USER_PLAYING')){
	//TODO
	
	logf("用户观看直播中");
	echo_1('success');
}

if(!strcasecmp($action, 'AEC_LIVE_USER_OFFLINE')){
	//TODO
	
	logf("用户停止观看直播");
	echo_1('success');
}

//===============================其它事件通知==============
// https://docs.starrtc.com/zh-cn/docs/aec-other.html
if(!strcasecmp($action, 'AEC_MSG_SERVER_GET_PUSH_MODE')){
	//TODO
	
	logf("获取某用户的推送模式");
	echo_1(1);
}

if(!strcasecmp($action, 'AEC_MSG_SERVER_SET_PUSH_MODE')){
	//TODO
	
	logf("设置某用户的推送模式");
	echo_1('success');
}
echo_0('unkown action:'.$action);




//=========================VOIP(一对一)事件通知==================
//https://docs.starrtc.com/zh-cn/docs/aec-voip.html
function process_voip_event($action, $dataArr){
	$userId    = array_key_exists('userId', $dataArr)    ? $dataArr['userId']    : 0;
	
	if(!strcasecmp($action, 'AEC_VOIP_USER_ONLINE')){
		//TODO： 可检查用户余额是否足够  
		
		// {"ts":"1561083201","action":"AEC_VOIP_USER_ONLINE","userId":"892500","userId2":"500660","time":"1561083201"}
		$userId2    = array_key_exists('userId2', $dataArr) ? $dataArr['userId2']    : 0;
		logf("$userId 请求与 $userId2 进行通话");
		echo_1('success');	//返回1表示允许此次通话	
	}

	if(!strcasecmp($action, 'AEC_VOIP_USER_PLAYING')){
		//用户通话时此事件每分钟回调一次
		//TODO：可以在此对用户的余额进行判断，如果余额不足，可以返回0断开他们俩的通话
		

		//{"ts":"1561083596","action":"AEC_VOIP_USER_PLAYING","userId":"892500","userId2":"500660","time":"1561083596"}
		$userId2    = array_key_exists('userId2', $dataArr) ? $dataArr['userId2']    : 0;
		logf("$userId 与 $userId2 仍在通话中");
		echo_1('success');		
	}

	if(!strcasecmp($action, 'AEC_VOIP_USER_HANGUP')){
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
	if(!strcasecmp($action, 'AEC_CHATROOM_CREATE')){
		//TODO
		
		//{"ts":"1561085008","action":"AEC_CHATROOM_CREATE",
		//"userId":"892500","roomId":"a4a8_KS9sWt36ttn","roomType":"CHAT_ROOM_TYPE_PUBLIC",
		//"conCurrentNumber":"100","userDefineData":"666"}
		//其中 userDefineData 是客户端创建聊天室时传的参数，目前传的是聊天室的名字，以后可以传json.
		
		
		$roomType         = array_key_exists('roomType',         $dataArr) ? $dataArr['roomType'] : '';
		$conCurrentNumber = array_key_exists('conCurrentNumber', $dataArr) ? $dataArr['conCurrentNumber'] : '';// 最大人数
		
		$userDefineData         = array_key_exists('userDefineData',   $dataArr) ? $dataArr['userDefineData'] : '';		
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
	

	if(!strcasecmp($action, 'AEC_CHATROOM_DELETE')){
		//TODO:可检查userId的权限，比如是不是聊天室的创建者
		
		$ret = delete_chat_room($userId, $roomId);
		if($ret != 0){	
			echo_0("delete_chatroom_failed:$ret");	
		}				
		logf("$userId 请求删除聊天室");
		echo_1('delete_chatroom_success');		
	}


	if(!strcasecmp($action, 'AEC_CHATROOM_IS_EXIST')){
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
}