<?php

//存储直播列表
$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');

//uuid由channelId+chatroomId拼接而成， 共32位
$uuid    = array_key_exists('ID', $_REQUEST) ? $_REQUEST['ID'] : 0;
$Name    = array_key_exists('Name', $_REQUEST) ? $_REQUEST['Name'] : 0;
$Creator = array_key_exists('Creator', $_REQUEST) ? $_REQUEST['Creator'] : 0;

if(empty($uuid) || empty($Name) || empty($Creator)){	 
	echo_0('missing args');
}	


$ret = store($uuid, $Creator, $Name);
if($ret != 0){
	echo_0('store:'.$ret);
}

echo_1('success');


function store($uuid, $Creator, $Name){	
	global $g_writeMdb;
	$ctime     = date('Y-m-d H:i:s');	
	
	$roomId    = mb_substr($uuid, -16, 16, "UTF-8");
	$channelId = mb_substr($uuid, 0, -16,  "UTF-8");
	try{	
		$sql = "select id from live_lists where uuid = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
			return 12;					
		}
		
		if($pstmt->execute(array($uuid))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);	
			if($resNum == 1){			
				return 16;				
			}else{									
				$sql = "insert into live_lists (uuid, channelId, roomId, name, userId, ctime) values (?,?,?,?,?,?)";
				if(!($pstmt = $g_writeMdb->prepare($sql))){           
					return 15;    
				} 
				if($pstmt->execute(array($uuid, $channelId, $roomId, $Name, $Creator, $ctime))){				
					return 0;
				}else{
					return 14;
				}
			}			
		}else{
			return 13;
		}				
	}catch(PDOException $e){
		return 11;
	}	
	return 10;
}