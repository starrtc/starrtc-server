<?php
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/user.php');


//检查当前用户是否在线
$userId    = array_key_exists('userId', $_REQUEST) ? $_REQUEST['userId'] : 0;
if(empty($userId)){
	echoErr('missing args');
}	


$ret = is_user_online($userId);
if($ret != 0){
	echoErr('user_offline:'.$ret);
}

echoK('online');


