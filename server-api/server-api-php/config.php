<?php
function_exists("date_default_timezone_set")?date_default_timezone_set("Asia/Shanghai"):"";
header("Content-Type: text/html; charset=utf-8");//注意文件本身的编码也需要是utf-8

ini_set("display_errors","On");//调试
error_reporting(E_ALL);



$api_config_dir = dirname(__FILE__);
require_once($api_config_dir . '/include/pubFun.php');



define('appid', 	 'your appid');
define('secret',     'your secret');
define('guardToken', 'your guardToken');