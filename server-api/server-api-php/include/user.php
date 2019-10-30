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


//仅做测试，用于保存用户
function save_user($userId){
	global $g_writeMdb;	
	try{			
		$sql = "select id from users where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){           
            return 13;    
        }
		if($pstmt->execute(array($userId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);			
			if($resNum == 0){
				$ctime = date('Y-m-d H:i:s'); 		
				$sql = "insert into users (userId, ctime) values (?,?)";
				if(!($pstmt = $g_writeMdb->prepare($sql))){           
					return 18;    
				} 
				if($pstmt->execute(array($userId, $ctime))){				
					return 0;
				}else{
					return 19;
				}					
			}			
			return 0;	
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


//判断用户的类型
function isUserType($userId, $utype_to_check){
	global $g_writeMdb;	
	try{			
		$sql = "select utype from users where userId = ? limit 1";			
		if(!($pstmt = $g_writeMdb->prepare($sql))){				
			return 12;
		}		
		if($pstmt->execute(array($userId))){		
			$result = $pstmt->fetchAll();        
			$resNum = count($result);	
			if($resNum == 0){	
				return 14;	
			}			  
			$utype    = $result[0][0];
			if($utype & $utype_to_check){
				return 0;
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

//获取用户单价
function getPricePerMin($userId){
	global $g_writeMdb;	
    $retArr = array();	

    try{
        $sql = "select price from users where userId = ? limit 1";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        }
        if($pstmt->execute(array($userId))){
            $result = $pstmt->fetchAll();
            $resNum = count($result);
            if($resNum == 0){
                $retArr['ret'] = 14;return $retArr;
            }
            $price = $result[0][0];          
            $retArr['ret']  = 0;
            $retArr['data'] = $price;
            return $retArr;
        }else{
            $retArr['ret'] = 13;return $retArr;
        }
    }catch(PDOException $e){
        $retArr['ret'] = 11;return $retArr;
    }
    $retArr['ret'] = 10;return $retArr;
}


function getBalance($userId){
	global $g_writeMdb;	
    $retArr = array();	

    try{
        $sql = "select balance from users where userId = ? limit 1";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        }
        if($pstmt->execute(array($userId))){
            $result = $pstmt->fetchAll();
            $resNum = count($result);
            if($resNum == 0){
                $retArr['ret'] = 14;return $retArr;
            }
            $balance = $result[0][0];          
            $retArr['ret']  = 0;
            $retArr['data'] = $balance;
            return $retArr;
        }else{
            $retArr['ret'] = 13;return $retArr;
        }
    }catch(PDOException $e){
        $retArr['ret'] = 11;return $retArr;
    }
    $retArr['ret'] = 10;return $retArr;
}


function update_user_income($userId, $balance){	
	global $g_writeMdb;			
	try{
		$sql = "update users set balance = balance + ? where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){ 
			return 12;
		}   
		if($pstmt->execute(array($balance, $userId))){
			return 0;	
		}else{
			return 13;
		}		
	}catch(PDOException $e){
		return 11;
	}	
    return 10;
}

function reduce_user_balance($userId, $balance){	
	global $g_writeMdb;			
	try{
		$sql = "update users set balance = balance - ? where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){ 
			return 12;
		}   
		if($pstmt->execute(array($balance, $userId))){
			return 0;	
		}else{
			return 13;
		}		
	}catch(PDOException $e){
		return 11;
	}	
    return 10;
}


function update_voip_duration($userId){
	global $g_writeMdb;	
    try{
        $sql = "update users set voip_duration = voip_duration + 1 where userId = ? limit 1";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        }
        if($pstmt->execute(array($userId))){
            return 0;
        }else{
            return 13;
        }
    }catch(PDOException $e){
        return 11;
    }
    return 10;
}
