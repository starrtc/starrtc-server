<?php


$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/doc.php');


define('convert_success',     1); //转换成功
define('convert_failed',      2);
define('convert_processing',  3);//转换中

$id = array_key_exists('id', $_REQUEST) ? $_REQUEST['id'] : 0;
if(empty($id)){	 
	echoErr('missing args');
}	


$ret = get_doc_by_id($id);
if($ret['ret'] != 0){
	echoErr('get_doc_failed:'.$ret['ret']);	
}
$doc_info   = $ret['data'];

$doc_id     = $doc_info['id'];
$local_path = $doc_info['local_path'];
$state      = $doc_info['state'];
$url_path   = $doc_info['url_path'];

if($state == convert_success){
	$http_path = $url_path . $doc_id;
	 
	$full_path = $local_path . $doc_id;	
	$count = count(glob($full_path . '/*.jpg'));
	if($count == 0){
		echoErr('process error');	
	}

	$info   = array();
	$index  = 0;
	for($i=0; $i<$count; $i++){
		$info[$index++] = $http_path . '/starRTC-' . $i . '.jpg';	
	}
	echoK($info);	
}elseif($state == convert_failed){
	echoErr('process error');	
}else{
	echoErr('processing');
}
