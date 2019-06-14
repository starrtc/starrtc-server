<?php
//获取authKey
//author: admin@elesos.com

$dir = dirname(__FILE__);
require_once($dir . '/config.php');


$userid = array_key_exists('userid', $_REQUEST) ? $_REQUEST['userid'] : 0;
if(empty($userid)){
	echo_0('missing args');	
}

$url    = 'https://api.starRTC.com/aec/authKey';

$post_data = array (
		'appid'  => appid,
		'secret' => secret,
		'userid' => $userid		
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

$result = curl_exec($ch);
curl_close($ch);
$data = json_decode($result, TRUE);
if($data['status'] == 1){
	$authKey = $data['data'];
	echo_1($authKey);
}else{
	echo_0($data['data']);	
}
return;
