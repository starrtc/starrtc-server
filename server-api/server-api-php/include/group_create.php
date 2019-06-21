<?php




function createGroup($creator, $groupName, $addUsers){	
	global $g_writeMdb;	
	$retArr = array();
	
	$addUsersArr = explode(",", $addUsers);
	$curNum      = count($addUsersArr);	//统计下人数
    $ctime       = date('Y-m-d H:i:s');
	
	$userList_suffix = addSuffix($addUsers);
	
    try{
        $sql = "insert into groups (creator, groupName, userList, ctime, curNum) values (?,?,?,?,?)";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;	
        }
        if($pstmt->execute(array($creator, $groupName, $userList_suffix,  $ctime, $curNum))){
			$groupId = $g_writeMdb->lastInsertId();	
			
			foreach($addUsersArr as $userId){
				$ret = updateUserGroupList($userId, $groupId); //更新每个人的群列表
				if($ret['ret'] != 0){
					$retArr['ret'] = intval('14'.$ret['ret']);return $retArr;					
				}				
			}
			
			$item = array();
			$item['groupId']  = $groupId;			
			$retArr['ret']  = 0;
			$retArr['data'] = $item;	
			return $retArr;	          
        }else{
            $retArr['ret'] = 13;return $retArr;//创建群失败
        }
    }catch(PDOException $e){
        $retArr['ret'] = 11;return $retArr;	
    }
    $retArr['ret'] = 10;return $retArr;	
}


function updateUserGroupList($userId, $groupId){
	global $g_writeMdb;	
    try{       
        $sql = "select id, groupList from userGroup where userId = ? limit 1";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        }
        if($pstmt->execute(array($userId))){
            $result = $pstmt->fetchAll();
            $resNum = count($result);
            if($resNum == 1){ //有记录，更新
				$id               = $result[0][0];
                $groupList_suffix = trim($result[0][1]);  

                if(!empty($groupList_suffix)){
                    $groupList_suffix = $groupList_suffix. ',' .$groupId.'_0';
                }else{
                    $groupList_suffix = $groupId.'_0';
                }    
                $sql = "update `userGroup` set `groupList` = ? where `id` = ?";
                if(!($pstmt = $g_writeMdb->prepare($sql))){
                    return 14;
                }
                if($pstmt->execute(array($groupList_suffix, $id))){
					return 0;
                }else{
                    return 15;
                }
            }else{//记录不存在，插入
                $sql = "insert into userGroup (userId, groupList) values (?,?)";
                if(!($pstmt = $g_writeMdb->prepare($sql))){
                    return 16;
                }
				$groupId_suffix = $groupId.'_0';
                if($pstmt->execute(array($userId, $groupId_suffix))){
					return 0;
                }else{
                    return 17; //更新用户群列表失败
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