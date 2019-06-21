<?php
//   prepare 返回PDOStatement ，然后调用execute（Returns TRUE on success or FALSE on failure.）
/*
 * 
 *
 * @author admin#elesos.com 
 * @param  
 * @return 成功返回0
 *		   
 */



function linkDatabase($host, $dbname, $usr, $password){	
    $dsn    = "mysql:host=".$host.";dbname=".$dbname;	
				
	$retArr = array();
	try {		
		$db = new PDO($dsn, $usr, $password);//create a PDO instance representing a connection to a database
		if(!($db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false))){//防SQL注入 Returns TRUE on success or FALSE on failure.
			$retArr['ret'] = 10;$retArr['data'] = 'PDO setAttribute failed';return $retArr;
		}
		if(false === ($db->exec("set names 'utf8'"))){
			$retArr['ret'] = 11;$retArr['data'] = 'PDO exec failed';return $retArr;
		}		
	}catch (PDOException $e) {
	    logf($e->getMessage());
		$retArr['ret'] = 12;
		$retArr['data'] = $e->getMessage();		
		return $retArr;
	}		
	$retArr['ret'] = 0;
	$retArr['data'] = $db;	
	return $retArr;   
}







function getWriteMdb(){	
	$retArr =array();
	$ret    = linkDatabase(writeServer, database, username, password);
	if($ret['ret'] != 0){
		$retArr['ret'] = intval('10'.$ret['ret']);
		return $retArr;
	}
	$mdb = $ret['data'];
	$retArr['ret']  = 0;
	$retArr['data'] = $mdb;
	return $retArr;
}

function getReadMdb(){	
	$retArr =array();
	$ret    = linkDatabase(readServer, database, username, password);
	if($ret['ret'] != 0){
		$retArr['ret'] = intval('10'.$ret['ret']);
		return $retArr;
	}
	$mdb = $ret['data'];
	$retArr['ret']  = 0;
	$retArr['data'] = $mdb;
	return $retArr;
}


