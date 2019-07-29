<?php

function save_doc($doc_name, $pic_url, $local_path, $full_path, $file_ext){	
	global $g_writeMdb;	
	$retArr = array();	
	$ctime  = date('Y-m-d H:i:s'); 		
	try{	
		$sql = "insert into docs (doc_name, url_path, local_path, full_path, file_ext, ctime) values (?,?,?,?,?,?)";
		if(!($pstmt = $g_writeMdb->prepare($sql))){           
            $retArr['ret'] = 12;return $retArr;	
        } 
		if($pstmt->execute(array($doc_name, $pic_url, $local_path, $full_path, $file_ext, $ctime))){				
			$retArr['ret'] = 0;
			$retArr['data'] = $g_writeMdb->lastInsertId();			
			return $retArr;						
		}else{
			$retArr['ret'] = 13;return $retArr;	
		}		
	}catch(PDOException $e){
		$retArr['ret'] = 11;return $retArr;	
	}	
	$retArr['ret'] = 10;return $retArr;	
}




function update_doc_convert_state($id, $state){	
	global $g_writeMdb;	
	try{
		$sql = "update docs set state = ? where id = ? limit 1";
		if(!($pstmt = $g_writeMdb->prepare($sql))){ 
			return 12;
		}   
		if($pstmt->execute(array($state, $id))){
			return 0;	
		}else{
			return 13;
		}		
	}catch(PDOException $e){
		return 11;
	}	
    return 10;
}


function get_doc(){
	global $g_readMdb;	
    $retArr = array();
    try{  
        $sql = "select id, local_path, full_path, file_ext, state, doc_name from docs where state = 0 limit 1";
        //$sql = "select id, local_path, full_path, file_ext, state from docs where state = 0 and file_ext = 'pdf' ORDER BY id DESC limit 1";
        if(!($pstmt = $g_readMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        }
        if($pstmt->execute()){
            $result = $pstmt->fetchAll();
            $resNum = count($result);
            if($resNum == 0){
                $retArr['ret']  = 14;return $retArr;
            }
			
            $info = array();
            $info['id']           = $result[0][0];
            $info['local_path']   = $result[0][1];
            $info['full_path']    = $result[0][2];
            $info['file_ext']     = $result[0][3];
            $info['state']        = $result[0][4];
            $info['doc_name']     = $result[0][5];
          
            $retArr['ret']  = 0;
            $retArr['data'] = $info;
            return $retArr;
        }else{
            $retArr['ret'] = 13;return $retArr;
        }
    }catch(PDOException $e){
        $retArr['ret'] = 11;return $retArr;
    }
    $retArr['ret'] = 10;return $retArr;
}

function get_doc_by_id($id){
	global $g_readMdb;	
    $retArr = array();
    try{  
        $sql = "select id, local_path, full_path, file_ext, state, url_path from docs where id = ? limit 1";
        if(!($pstmt = $g_readMdb->prepare($sql))){
            $retArr['ret'] = 12;return $retArr;
        }
        if($pstmt->execute(array($id))){
            $result = $pstmt->fetchAll();
            $resNum = count($result);
            if($resNum == 0){
                $retArr['ret']  = 14;return $retArr;
            }
			
            $info = array();
            $info['id']           = $result[0][0];
            $info['local_path']   = $result[0][1];
            $info['full_path']    = $result[0][2];
            $info['file_ext']     = $result[0][3];
            $info['state']        = $result[0][4];
            $info['url_path']     = $result[0][5];
          
            $retArr['ret']  = 0;
            $retArr['data'] = $info;
            return $retArr;
        }else{
            $retArr['ret'] = 13;return $retArr;
        }
    }catch(PDOException $e){
        $retArr['ret'] = 11;return $retArr;
    }
    $retArr['ret'] = 10;return $retArr;
}



