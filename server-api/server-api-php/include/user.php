<?php





function _save_online_user($userId){
	global $g_writeMdb;	
	try{			
		$sql = "select id from online_users where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){           
            return 13;    
        }
		if($pstmt->execute(array($userId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			$ctime = time();
			if($resNum == 0){
				$sql = "insert into online_users (userId, last_online_ts) values (?,?)";
				if(!($pstmt = $g_writeMdb->prepare($sql))){           
					return 18;    
				} 
				if($pstmt->execute(array($userId, $ctime))){				
					return 0;
				}else{
					return 19;
				}					
			}else{
				$id  = intval($result[0][0]);					
				$sql = "update `online_users` set last_online_ts = ? where `id` = ? limit 1";						
				if(!($pstmt = $g_writeMdb->prepare($sql))){           
					return 16;    
				}
				if($pstmt->execute(array($ctime, $id))){			
					return 0;	
				}else{
					return 17;
				}
			}
		}else{
			return 14;
		} 				   
	}catch(PDOException $e){		
		return 11;
	}	
	return 10;
}

//返回0表示在线
function is_user_online($userId){
	global $g_writeMdb;	
	try{			
		$sql = "select id, last_online_ts from online_users where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){           
            return 13;    
        }
		if($pstmt->execute(array($userId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			if($resNum == 0){
				return 20;
			}						
			$id    = intval($result[0][0]);	
			$db_ts = $result[0][1];	
			
			$cur_ts = time();						
			$duration = $cur_ts - $db_ts;	//s				
			if($duration < 60){//1min=60s	1分钟内认为在线			
				return 0;			
			}else{		
				logf("duration=$duration");
				$sql = "delete from `online_users` where `id` = ? limit 1";						
				if(!($pstmt = $g_writeMdb->prepare($sql))){           
					return 16;    
				}
				if($pstmt->execute(array($id))){						
					return 21;	
				}else{
					return 17;
				}	
			}				
		}else{
			return 14;
		} 				   
	}catch(PDOException $e){		
		return 11;
	}	
	return 10;
}



