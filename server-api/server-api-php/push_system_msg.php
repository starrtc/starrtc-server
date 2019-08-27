<?php
$dir = dirname(__FILE__);
require_once($dir . '/config.php');


$toUsers     = array_key_exists('toUsers', $_REQUEST) ? $_REQUEST['toUsers'] : 0;//用户，用逗号隔开	
$contentData = array_key_exists('msg', $_REQUEST) ? $_REQUEST['msg'] : 0;
if(empty($toUsers) ||empty($contentData)){
	echoErr('missing args');
}	



$msgArr = array();
$msgArr['fromId']      = 'system'; //发送消息的人
$msgArr['targetId']    = '';       //目标id，可能是个人或群号
$milliseconds          = round(microtime(true) * 1000);;
$msgArr['time']        = $milliseconds; //消息时间，毫秒
$msgArr['msgIndex']    = $milliseconds; //消息编号
$msgArr['type']        = 1;
$msgArr['code']        = 0;
$msgArr['contentData'] = $contentData;
$msg = json_encode($msgArr);


$digest ='您收到一条系统消息'; //摘要
		
$ret = pushSystemMsgToUsers($msg, $digest, $toUsers);

$data = json_decode($ret, TRUE);
if($data['status'] != 1){	
	echoErr('系统消息发送失败');	
}
echoK('success'); 


