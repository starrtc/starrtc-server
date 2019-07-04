<?php

//channelType:GLOBAL_PUBLIC,
//ownerType: ROOM_CHANNEL, 
function create_channel($userId, $channelId, $channelType, $relateId, $relateType, $specify, $extra, $conCurrentNumber){	
	global $g_writeMdb;
	$ctime = date('Y-m-d H:i:s'); 		
	try{	
		$sql = "insert into channels (userId, channelId, channelType, relateId, relateType, specify, extra, ctime, conCurrentNumber, lastOnlineTime) values (?,?,?,?,?,?,?,?,?,?)";
		if(!($pstmt = $g_writeMdb->prepare($sql))){           
            return 13;    
        } 
		if($pstmt->execute(array($userId, $channelId, $channelType, $relateId, $relateType, $specify, $extra, $ctime, $conCurrentNumber, time()))){				
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
        $sql = "select id, conCurrentNumber, userId, relateId from channels where channelId = ? limit 1";
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
			$channelInfo['relateId']  = $result[0][4];
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



function deleteChannelByUserId($userId, $channelId){	
	global $g_writeMdb;		
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


function deleteChannel($channelId){	
	global $g_writeMdb;		
	try{	
		$sql = "delete from `channels` where `channelId` = ? limit 1";			
		if(!($pstmt = $g_readMdb->prepare($sql))){         
            return 12;    
        } 
		if($pstmt->execute(array($channelId))){			
			return 0;
		}else{
			return 13;
		}		
	}catch(PDOException $e){
		return 11;
	}	
	return 10;	
}



function canCreateChannel($userId){		
	global $g_readMdb;	
	try{
		$sql = "select count(*) as num from channels where userId = ?";
		if(!($pstmt = $g_readMdb->prepare($sql))){           
			return 12;
		}			
		if($pstmt->execute(array($userId))){	
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			
			if($resNum == 1){
				$num = $result[0][0];				
				if($num <= 500){			
					return 0; //返回0表示可以创建
				}else{
					return 14;	 
				}				
            }else{
				return 15;
			}			
		}else{
			return 13;
		}
		
    }catch(PDOException $e){
		return 11;
    }    	
	return 10;	
}







function update_channel_state($channelId, $liveState){	
	global $g_writeMdb;			
	try{
		$sql = "update channels set liveState = ? where channelId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){ 
			return 12;
		}   
		if($pstmt->execute(array($liveState, $channelId))){
			return 0;	
		}else{
			return 13;
		}		
	}catch(PDOException $e){
		return 11;
	}	
    return 10;
}


