<?php




function joinGroup($groupId, $userId){
	global $g_writeMdb;		
	$userList = '';
	try{		
		// 取出群成员并检查
		$sql = "select userList from groups where id = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        } 
		if($pstmt->execute(array($groupId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			if($resNum == 0){	
				return 20;	
			}		
			$dbUserList   = $result[0][0];		
			if(!empty($dbUserList)){//判断是否已在群中	
				$dbUserListArr = explode(",", $dbUserList);	
				$pureDbUserListArr = array();
				foreach($dbUserListArr as $v){//去后缀标记
					$v = getPrefix($v);
					array_push($pureDbUserListArr, $v);
				}
				if(in_array($userId, $pureDbUserListArr)){//如果在群里,返回成功
					return 0;							
				}
				$userList = $dbUserList . ',' . $userId.'_0';			
			}else{
				$userList = $userId.'_0';						
			}				
		}else{
			return 13;
		}
		
		//检查用户的群列表
		$sql = "select id, groupList from userGroup where userId = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 14;
        } 		
		if($pstmt->execute(array($userId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);			
			if($resNum == 1){		
				$id        = $result[0][0];		
				$groupList = trim($result[0][1]);				
				if(!empty($groupList)){	
					$groupList = $groupList. ',' .$groupId.'_0';
				}else{	
					$groupList = $groupId.'_0';
				}
				
				$ret = update_userGroup($id, $groupList);				
                if($ret != 0){
                    return intval('17'.$ret);
                }				
			}else{//用户还没有加入任何群
				$ret = insert_userGroup($userId, $groupId);               
                if($ret != 0){
					return intval('21'.$ret);                   
                }
			}          
		}else{
			return 15;
		}
		
		//更新群的成员列表
		$ret = updateGroup_by_add($groupId, $userList);
		if($ret != 0){
			return intval('20'.$ret);
		}     
		return 0;		
	}catch(PDOException $e){
		return 11;
	}
	return 10;
}





function updateGroup_by_add($groupId, $userList){
	global $g_writeMdb;		
    try{
		$sql = "update `groups` set `userList` = ?, curNum=curNum+1 where `id` = ? limit 1"; 
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
