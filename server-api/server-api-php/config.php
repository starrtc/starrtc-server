<?php
//author: admin@elesos.com
function_exists("date_default_timezone_set")?date_default_timezone_set("Asia/Shanghai"):"";
header("Content-Type: text/html; charset=utf-8");//注意文件本身的编码也需要是utf-8

ini_set("display_errors","On");//调试
error_reporting(E_ALL);


//数据库配置
define('writeServer',  'localhost');
define('readServer',   'localhost');

define('database',     'starRTC_private');
define('username',     'root');
define('password',     '2017Star@c0nn0110');


// roomType
define('CHAT_ROOM_TYPE_PUBLIC', 1);
define('CHAT_ROOM_TYPE_LOGIN',  2);

define('GROUP_DND',   	  1);//Do Not Disturb 群消息免打扰






$api_config_dir = dirname(__FILE__);
//需要自己手动创建，并给予写权限: touch log.txt && chmod 777 log.txt
define('log_file',  $api_config_dir . '/log.txt');


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