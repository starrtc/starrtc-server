<?php



function getGroupList($groupId){
	global $g_writeMdb;	
	$retArr = array();
    try{
		$sql = "select userList from groups where groupId = ? limit 1";
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


//从groupList中删除groupId
//有可能只有一个，删除后为空
function delGroupId_from_groupList($groupList, $groupId){
    $groupArr = explode(',', $groupList);
    $pureMemberArr = array();
    foreach($groupArr as $v){
        $v = getPrefix($v);
        array_push($pureMemberArr, $v);
    }
	
    $key      = array_search($groupId, $pureMemberArr);//没找到返回false
    if(FALSE === $key){//不能用if(!$key)作为判断，因为如果刚好序号为0，则会误报没有

    }else{
        array_splice($groupArr, $key, 1);		//从数组的第Start开始删除Len个元素
        $groupList = implode(',', $groupArr);
    }
    return $groupList;
}
