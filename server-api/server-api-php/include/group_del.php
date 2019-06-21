<?php


function deleteGroup($creator, $groupId){
	global $g_writeMdb;	
    
    try{
        $sql = "select userList from groups where groupId = ? and creator = ? limit 1";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        }
        if($pstmt->execute(array($groupId, $creator))){
            $result = $pstmt->fetchAll();
            $resNum = count($result);
            if($resNum == 0){
                return 14;
            }
            $userList = $result[0][0];  
            
            $pureMemberArr = array();
            if(!empty($userList)){
                $memberArr = explode(",", $userList);
                foreach($memberArr as $v){
                    $prefix  = getPrefix($v);
                    array_push($pureMemberArr, $prefix);
                }              
                foreach ($pureMemberArr as $userId){				
                    $ret = delGroupIdFromUserGroup($userId, $groupId);	//更新每个人的群列表
                    if($ret != 0){
                        return intval('22'.$ret);
                    }
                }
            }
			
			$ret = delGroup($groupId); 
            if($ret != 0){
                return intval('15'.$ret);
            }	
			
            return 0;
        }else{
            return 13;
        }
    }catch(PDOException $e){
        return 11;
    }
    return 10;
}



function delGroupIdFromUserGroup($userId, $groupId){
	global $g_writeMdb;		
	try{
		$sql = "select id, groupList from userGroup where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){          
            return 12;    
        }  
		if($pstmt->execute(array($userId))){ 
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
            if($resNum == 0){
                return 0;//该用户未加入任何群
            }

            $id              = $result[0][0];
            $groupList       = trim($result[0][1]);           

            if(empty($groupList)){
                return 0;
            }
			
            $groupList = delGroupId_from_groupList($groupList, $groupId);				
            $sql = "update `userGroup` set `groupList`=? where `id` = ?";
            if(!($pstmt = $g_writeMdb->prepare($sql))){
                return 16;
            }
            if($pstmt->execute(array($groupList, $id))){            
                return 0;          
            }else{
                return 17;
            }
		}else{
			return 13;
		}
	}catch(PDOException $e){
		return 11;
	}
	return 10;	
}



function delGroup($groupId){
	global $g_writeMdb;		
    try{
        $sql = "delete from `groups` where `groupId` = ? limit 1";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        }
        if($pstmt->execute(array($groupId))){
            return 0;
        }else{
            return 13;
        }
    }catch(PDOException $e){
        return 11;
    }
    return 10;
}

