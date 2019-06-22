<?php

//channelType:GLOBAL_PUBLIC, 
//liveType:  liveType_live, 
//ownerType: ROOM_CHANNEL, 
function create_channel($userId, $channelId, $channelType, $liveType, $ownerId, $ownerType, $specify, $extra, $conCurrentNumber){	
	global $g_writeMdb;
	$ctime = date('Y-m-d H:i:s'); 		
	try{	
		$sql = "insert into channels (userId, channelId, channelType, liveType, ownerId, ownerType, specify, extra, ctime, conCurrentNumber, lastOnlineTime) values (?,?,?,?,?,?,?,?,?,?,?)";
		if(!($pstmt = $g_writeMdb->prepare($sql))){           
            return 13;    
        } 
		if($pstmt->execute(array($userId, $channelId, $channelType, $liveType, $ownerId, $ownerType, $specify, $extra, $ctime, $conCurrentNumber, time()))){				
			return 0;
		}else{
			return 14;
		}		
	}catch(PDOException $e){
		return 11;
	}	
	return 10;
}




function get_channel_info($channelId){
	global $g_readMdb;
    $retArr = array();
    try{  
        $sql = "select id, conCurrentNumber, userId, liveType, ownerId from channels where channelId = ? limit 1";
        if(!($pstmt = $g_readMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        }
        if($pstmt->execute(array($channelId))){
            $result = $pstmt->fetchAll();
            $resNum = count($result);
            if($resNum == 0){
                $retArr['ret']  = 14;return $retArr;
            }
			
            $channelInfo = array();
            $channelInfo['id']       = $result[0][0];
            $channelInfo['conCurrentNumber']   = $result[0][1];
            $channelInfo['userId']   = $result[0][2];
            $channelInfo['liveType'] = $result[0][3];
			$channelInfo['ownerId']  = $result[0][4];
            $retArr['ret']  = 0;
            $retArr['data'] = $channelInfo;
            return $retArr;
        }else{
            $retArr['ret'] = 13;return $retArr;
        }
    }catch(PDOException $e){
        $retArr['ret'] = 11;return $retArr;
    }
    $retArr['ret'] = 10;return $retArr;
}



function deleteChannel($userId, $channelId){	
	global $g_readMdb;		
	try{	
		$sql = "delete from `channels` where `channelId` = ? and userId = ? limit 1";			
		if(!($pstmt = $g_readMdb->prepare($sql))){         
            return 12;    
        } 
		if($pstmt->execute(array($channelId, $userId))){			
			return 0;
		}else{
			return 13;
		}		
	}catch(PDOException $e){
		return 11;
	}	
	return 10;	
}