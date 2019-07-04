<?php



function getGroupList($groupId){
	global $g_writeMdb;	
	$retArr = array();
    try{
		$sql = "select userList from groups where id = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        } 
		if($pstmt->execute(array($groupId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			if($resNum == 0){
				$retArr['ret'] = 14;return $retArr;
			}
		
			$userIdList = '';
			$ignoreList = '';			
			$userList = trim($result[0][0]);		
			if(!empty($userList)){				
				$memberArr = explode(",", $userList);
				$pureMemberArr = array();
				$ignoreListArr = array();
				foreach($memberArr as $v){					
					$prefix  = getPrefix($v);
					$suffix  = getSuffix($v);
					if($suffix & GROUP_DND ){					
						array_push($ignoreListArr, $prefix);
					}
					array_push($pureMemberArr, $prefix);
				}
				
				foreach ($pureMemberArr as $userId){					
					if(in_array($userId , $ignoreListArr)){
						$ignoreList = $userId .','. $ignoreList;		
					}
					$userIdList = $userId .','. $userIdList;								
				}
				$userIdList   = rtrim($userIdList, ',');//去掉结尾的逗号
				$ignoreList   = rtrim($ignoreList, ',');					
				
			}
			
			$data = array();
			$data['groupList']  = $userIdList;				
			$data['ignoreList'] = $ignoreList;				
			$retArr['ret']  = 0;
			$retArr['data'] = $data;return $retArr;			
		}else{
			$retArr['ret'] = 13;return $retArr;//查询失败
		}         
    }catch(PDOException $e){       
		$retArr['ret'] = 11;return $retArr;
    }
	$retArr['ret'] = 10;return $retArr;
}







//从list中删除id
//有可能只有一个，删除后为空
function del_from_List($list, $id){
    $listArr = explode(',', $list);
    $pureArr = array();
    foreach($listArr as $v){
        $v = getPrefix($v);
        array_push($pureArr, $v);
    }
	
    $key      = array_search($id, $pureArr);//没找到返回false
    if(FALSE === $key){//不能用if(!$key)作为判断，因为如果刚好序号为0，则会误报没有

    }else{
        array_splice($listArr, $key, 1);		//从数组的第Start开始删除Len个元素
        $list = implode(',', $listArr);
    }
    return $list;
}












function insert_userGroup($userId, $groupId){
	global $g_writeMdb;	
    try{
        $sql = "insert into userGroup (userId, groupList) values (?,?)";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        }     
		$groupId_suffix = $groupId.'_0';
        if($pstmt->execute(array($userId, $groupId_suffix))){
            return 0;
        }else{
            return 13;
        }
    }catch(PDOException $e){
        return 11;
    }
    return 10;
}



             
				

				
				
function update_userGroup($id, $groupList){
	global $g_writeMdb;	
    try{       
		$sql = "update `userGroup` set `groupList` = ? where `id` = ?";
        if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        }
        if($pstmt->execute(array($groupList, $id))){
            return 0;
        }else{
            return 13;
        }
    }catch(PDOException $e){
        return 11;
    }
    return 10;
}



function pushIgnore($groupId, $userId, $op){
    global $g_writeMdb;	
	try{
		$sql = "select userList from groups where id = ? limit 1";		
		if(!($pstmt = $g_writeMdb->prepare($sql))){
            return 12;
        } 
		if($pstmt->execute(array($groupId))){
			$result = $pstmt->fetchAll();        
			$resNum = count($result);
			if($resNum == 0){
				return 14;	//不存在		  
			}		
			
			$userList   = trim($result[0][0]);
			if(!empty($userList)){
				$memberArr = explode(",", $userList);
				$pureMemberArr = array();				
				foreach($memberArr as $v){
					$v = getPrefix($v);
					array_push($pureMemberArr, $v);			
				}
		
				$key = array_search($userId, $pureMemberArr);//没找到返回false
				if(FALSE === $key){		//该用户不在群里					
					return 16;
				}				
				
				$dbUserId = $memberArr[$key];
				$state  = getSuffix($dbUserId);
				if($op == GROUP_PUSH){//取消免打扰
					if($state & GROUP_DND ){//如果已经是免打扰状态,要取消
						$state = $state & (~GROUP_DND);						
					}else{
						return 0;						
					}					
				}else if($op == GROUP_DND){//设置免打扰
					if($state & GROUP_DND ){//如果已经是免打扰状态
						return 0;
					}else{
						$state = $state| GROUP_DND;//设置成免打扰						
					}					
				}
				$dbUserId = $userId.'_'.$state;
				
				array_splice($memberArr, $key, 1);		//从数组的第Start开始删除Len个元素；	
				array_push($memberArr, $dbUserId);	
				$userList = implode(',', $memberArr);			
				
				
				
				$sql = "update `groups` set `userList` = ? where `id` = ?";//更新群成员
				if(!($pstmt = $g_writeMdb->prepare($sql))){
					return 17;    
				} 			 
				if($pstmt->execute(array($userList, $groupId))){	
					
				}else{
					return 18;
				}	
				
					
				//设置用户的群列表里面的状态
				$ret = updateUserGroupState($userId, $groupId, $op);
				if($ret != 0){
					return intval('19'.$ret);       
				}else{
					return 0;
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



function updateUserGroupState($userId, $groupId, $op){
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
				return 14;//该用户未加入任何群
			}		
			$id         = intval($result[0][0]);
			$groupList  = trim($result[0][1]);				
			if(!empty($groupList)){					
				$groupArr = explode(',', $groupList);
				$pureGroupArr = array();
				foreach($groupArr as $v){
					$v = getPrefix($v);
					array_push($pureGroupArr, $v);
				}	
				
				$key = array_search($groupId, $pureGroupArr);//没找到返回false				
				if(FALSE === $key){						
					return 0;//没有
				}	
				
				$dbGroupId = $groupArr[$key];
				$state   = getSuffix($dbGroupId);
				
				if($op == 0){//取消免打扰
					if($state & GROUP_DND ){//如果已经是免打扰状态,要取消
						$state = $state & (~GROUP_DND);						
					}else{
						return 0;						
					}					
				}else if($op == 1){//设置免打扰
					if($state & GROUP_DND ){//如果已经是免打扰状态
						return 0;
					}else{
						$state = $state| GROUP_DND;//设置成免打扰						
					}					
				}			
							
				$dbGroupId = $groupId.'_'.$state;
				array_splice($groupArr, $key, 1);		//从数组的第Start开始删除Len个元素；	
				array_push($groupArr, $dbGroupId);	
				$groupList = implode(',', $groupArr);			
				
				
				$ret = update_userGroup($id, $groupList);				
                if($ret != 0){
                    return intval('23'.$ret);
                }	
				return 0; 
				
			}else{				
				return 15;//该用户未加入任何群
			}		  
		}else{
			return 13;
		}
	}catch(PDOException $e){
		return 11;
	}
	return 10;	
}



