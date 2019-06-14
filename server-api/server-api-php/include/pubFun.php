<?php

function generateSign($data, $guardToken){
	return base64_encode(hash_hmac('sha1', $data, $guardToken, TRUE));	
}

function echo_1($data, $exit = 1){	
	$retArr = array('status' => 1, 'data' => $data);
	$json   = json_encode($retArr);	
	echo $json;	
	if($exit == 1){
		exit;
	}	
}

function echo_0($data, $exit = 1){	
	$retArr = array('status' => 0, 'data' => $data);
	$json   = json_encode($retArr);	
	echo $json;	
	if($exit == 1){
		exit;
	}	
}



