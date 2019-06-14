<?php
//AEC接口  
//只能返回特定格式json:{"status":"x","data":"xxx"}
//其中status只能返回0和1，其中0为失败


//参见 https://docs.starrtc.com/zh-cn/docs/aec-index.html

//author: admin@elesos.com

$aec_dir = dirname(__FILE__);
require_once($aec_dir . '/config.php');

	

$data = rawurldecode(array_key_exists('data', $_REQUEST) ? $_REQUEST['data'] : 0);
$sign = rawurldecode(array_key_exists('sign', $_REQUEST) ? $_REQUEST['sign'] : 0);
if(empty($data) || empty($sign)){
	echo_0('missing args');
}

$dataArr = json_decode($data, TRUE);
if(!is_array($dataArr)){
	echo_0('invalid data');
}

$signstr = generateSign($data, guardToken);
if(strcasecmp($sign, $signstr)){
	echo_0('invalid sign');
}

$action = array_key_exists('action', $dataArr) ? $dataArr['action'] : 0;
if(empty($action)){
	echo_0('action is empty');
}
$groupId = array_key_exists('groupId', $dataArr) ? $dataArr['groupId'] : 0;




if(!strcasecmp($action, 'AEC_ACCESS_VALIDATION')){//接入验证	    
	echo_1($dataArr['echostr']); 	
}


if(!strcasecmp($action, 'AEC_GROUP_CREATE')){
	echo_0('err msg');	
}


if(!strcasecmp($action, 'AEC_GROUP_DEL')){
	echo_0('err msg');	
}
// TODO:process other actions


echo_0('unkown action:'.$action);