<?php


function quitGroup($userId, $groupId){
	global $g_writeMdb;
	$userList = '';
	try{		
		//从群中删除此成员 
		$sql = "select userList, creator from groups where id = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
			return 12; 
		}
		if($pstmt->execute(array($groupId))){
			$result = $pstmt->fetchAll();
			$resNum = count($result);
			if($resNum == 1){				
				$userList    = $result[0][0];
				$creator     = $result[0][1];
				if($userId == $creator){
					return 30; //创建者不能删除自已
				}				
				$userList = del_from_List($userList, $userId);						
			}else{
				return 14; 
			}
		}else{
			return 13; 
		}
				
				
		// 更新用户的群列表
		$sql = "select id, groupList from userGroup where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
           return 15; 
        } 
		if($pstmt->execute(array($userId))){ 
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
            if($resNum == 0){
                return 17; //该用户未加入任何群
            }

            $id        = intval($result[0][0]);
            $groupList = trim($result[0][1]);
         
            if(empty($groupList)){
                return 18; //该用户未加入任何群
            }

            $groupList = del_from_List($groupList, $groupId); 			
            $ret       = update_userGroup($id, $groupList);
            if($ret != 0){
                return intval('30'.$ret);
            }
		}else{
			return 16; 
		}
		
		$ret = updateGroup_by_del($groupId, $userList);//更新群的成员列表
		if($ret != 0){
			return intval('20'.$ret);
		}		
		return 0;
	}catch(PDOException $e){
		return 11; 
	}
	return 10;    
}



function updateGroup_by_del($groupId, $userList){
	global $g_writeMdb;
    try{
        $sql = "update `groups` set `userList` = ?, curNum=curNum-1 where `id` = ? limit 1";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        }
        if($pstmt->execute(array($userList, $groupId))){
            return 0;
        }else{
            return 13;
        }
    }catch(PDOException $e){
        return 11;
    }
    return 10;
}

