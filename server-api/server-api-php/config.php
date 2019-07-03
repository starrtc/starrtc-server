<?php
//author: admin@elesos.com
function_exists("date_default_timezone_set")?date_default_timezone_set("Asia/Shanghai"):"";
header("Content-Type: text/html; charset=utf-8");//注意文件本身的编码也需要是utf-8

ini_set("display_errors","On");//调试
error_reporting(E_ALL);



define('writeServer',  'localhost');//数据库配置
define('readServer',   'localhost');
define('database',     'starRTC_private');
define('username',     'xxx');
define('password',     'xxx');





define('GROUP_PUSH',   	  0); 
define('GROUP_DND',   	  1);//Do Not Disturb 群消息免打扰,  开启后该群的消息将不会推送给此用户



define('CHAT_ROOM_TYPE_PUBLIC', 1);// roomType 服务端程序定义的chatroom类型
define('CHAT_ROOM_TYPE_LOGIN',  2);


define('channelType_GROUP_SPECIFY', 		   1);//服务端程序创建的channel类型
define('channelType_LOGIN_SPECIFY', 		   2);
define('channelType_GLOBAL_PUBLIC', 	       3);
define('channelType_LOGIN_PUBLIC',  		   4);
define('channelType_GROUP_PUBLIC', 			   5);
define('channelType_BROADCAST',  			   6);
define('channelType_LIVEPROXY_GLOBAL_PUBLIC',  7);


define('relateType_GROUP_CHANNEL', 1);//区分是群的直播还是其它的
define('relateType_ROOM_CHANNEL',  2);

define('NO_LIVE',  0);//直播状态：无直播, 
define('LIVING', 1);//有直播
define('LIVE_OFF', 2);//主播离开了



define('MSG_PUSH_MODE_UNKNOW',        0);//未知（暂未获取到用户pushMode的状态，不推送）
define('MSG_PUSH_MODE_ALL_OFF',       1);//关闭所有推送
define('MSG_PUSH_MODE_ALL_ON',  	  2); //开启所有推送
define('MSG_PUSH_MODE_ONLY_CALLING',  3);//仅开启推送voip通话请求信息


$api_config_dir = dirname(__FILE__);
//需要自己手动创建，并给予写权限: touch log.txt && chmod 777 log.txt
define('log_file',  $api_config_dir . '/log.txt');


require_once($api_config_dir . '/include/errCode.php');
require_once($api_config_dir . '/include/pubFun.php');
require_once($api_config_dir . '/include/dbBase.php');


$ret = getReadMdb();
if($ret['ret'] != 0){	
	echo_0('get ReadMdb:'.$ret['ret']);  	
}

global $g_readMdb;
$g_readMdb = $ret['data'];

$ret = getWriteMdb();
if($ret['ret'] != 0){	
	echo_0('get WriteMdb:'.$ret['ret']);  	
}
global $g_writeMdb;
$g_writeMdb = $ret['data'];