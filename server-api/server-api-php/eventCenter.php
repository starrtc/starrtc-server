<?php
//AEC接口  
//只能返回特定格式json:{"status":"x","data":"xxx"}
//其中status只能返回0和1，其中0为失败


//参见 https://docs.starrtc.com/zh-cn/docs/aec-index.html

//author: admin@elesos.com

$aec_dir = dirname(__FILE__);
require_once($aec_dir . '/config.php');

	

$data = rawurldecode(array_key_exists('data', $_REQUEST) ? $_REQUEST['data'] : 0);
if(empty($data)){
	echo_0('missing args');
}

$dataArr = json_decode($data, TRUE);
if(!is_array($dataArr)){
	echo_0('invalid data');
}

$action = array_key_exists('action', $dataArr) ? $dataArr['action'] : 0;
if(empty($action)){
	echo_0('action is empty');
}
$groupId = array_key_exists('groupId', $dataArr) ? $dataArr['groupId'] : 0;

//=========================VOIP(一对一)事件通知==================
//https://docs.starrtc.com/zh-cn/docs/aec-voip.html
if(!strcasecmp($action, 'AEC_VOIP_USER_ONLINE')){
	//TODO
	logf("申请voip通话");
	echo_1('success');		
}

if(!strcasecmp($action, 'AEC_VOIP_USER_PLAYING')){
	//TODO
	logf("voip通话正在进行中");
	echo_1('success');		
}

if(!strcasecmp($action, 'AEC_VOIP_USER_HANGUP')){
	//TODO
	logf("voip挂断");
	echo_1('success');		
}



//===================群事件通知===============
// https://docs.starrtc.com/zh-cn/docs/aec-group.html
if(!strcasecmp($action, 'AEC_GROUP_CREATE')){
	//TODO
	logf("创建群");
	echo_0('没有权限');	
}

if(!strcasecmp($action, 'AEC_GROUP_SYNC_ALL')){
	//TODO
	logf("同步全部群成员");
	echo_0('没有权限');	
}



if(!strcasecmp($action, 'AEC_GROUP_DEL')){
	//TODO
	logf("删除群");
	echo_1('success');		
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

echo_0('unkown action:'.$action);