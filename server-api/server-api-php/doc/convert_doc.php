<?php
//文档转图片

$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/doc.php');

define('convert_success',     1); //转换成功
define('convert_failed',      2);
define('convert_processing',  3);//转换中

logf('get_doc_to_process');

$ret = get_doc();
if($ret['ret'] != 0){
	echo 'get_doc_failed:'.$ret['ret'].'\r\n';
	return;
}


$doc_info   = $ret['data'];

$doc_id     = $doc_info['id'];
echo "get_a_doc:$doc_id \r\n";
logf("get_a_doc:$doc_id");
$local_path = $doc_info['local_path'];
$full_path  = $doc_info['full_path'];
$file_ext   = $doc_info['file_ext'];
$doc_name   = $doc_info['doc_name'];

//取任务后更新下状态
$ret = update_doc_convert_state($doc_id, convert_processing);
if($ret != 0){
	echo "update_state_to_processing,error:$ret \r\n";
	return;
}
	
if(!strcasecmp($file_ext, 'pdf')){	
	$dest_full_path = $local_path . $doc_id; 
	if (!file_exists($dest_full_path)){
		if(!mkdir($dest_full_path, 0777, true)){
			echo "dir_create_failed \r\n";
		}		
	}
	
	$cmd = 'convert -density 300 -trim '.$full_path . '[0-4] -quality 100 '. $dest_full_path . '/starRTC.jpg';
	echo "cmd=$cmd \r\n";
	exec($cmd);
	
	
	$dest_file = $dest_full_path.'/starRTC-1.jpg';	
	if (file_exists($dest_file)){//检测文件是否存在
		$ret = update_doc_convert_state($doc_id, convert_success);
		if($ret != 0){
			echo "update_state_to_success,error:$ret \r\n";
		}
		echo "success \r\n";
	}else{
		echo "dest_file=$dest_file \r\n";	
		$ret = update_doc_convert_state($doc_id, convert_failed);
		if($ret != 0){
			echo "update_state_to_failed,error:$ret \r\n";
		}
		echo "failed1 \r\n";
	}
}elseif(!strcasecmp($file_ext, 'pptx')){
	$dest_full_path = $local_path . $doc_id; 
	if (!file_exists($dest_full_path)){
		if(!mkdir($dest_full_path, 0777, true)){
			echo "dir_create_failed \r\n";
		}		
	}
	//ppt转pdf	
	$cmd = "soffice --convert-to pdf:writer_pdf_Export --outdir $dest_full_path $full_path";  //生成在什么目录了，删除pdf
	echo "cmd=$cmd \r\n";
	exec($cmd);
	
	$fileArr  = pathinfo($doc_name);	
	$pdf_file = $dest_full_path.'/'.$fileArr['filename'].'.pdf';
	
	//pdf转图片
	$cmd = 'convert -density 300 -trim '.$pdf_file . '[0-4] -quality 100 '. $dest_full_path . '/starRTC.jpg';
	echo "cmd=$cmd \r\n";
	exec($cmd);
	
	
	$dest_file = $dest_full_path.'/starRTC-1.jpg';	
	if (file_exists($dest_file)){//检测文件是否存在
		$ret = update_doc_convert_state($doc_id, convert_success);
		if($ret != 0){
			echo "update_state_to_success,error:$ret \r\n";
		}
		echo "success \r\n";
	}else{
		echo "dest_file=$dest_file \r\n";	
		$ret = update_doc_convert_state($doc_id, convert_failed);
		if($ret != 0){
			echo "update_state_to_failed,error:$ret \r\n";
		}
		echo "failed1 \r\n";
	}	
}else{ //其它格式暂不支持
	$ret = update_doc_convert_state($doc_id, convert_failed);
	if($ret != 0){
		echo "update_state_to_failed,error2:$ret \r\n";
	}
	echo "failed2 \r\n";
	
}




