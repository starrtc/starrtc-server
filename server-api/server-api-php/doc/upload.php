<?php


$dir = dirname(dirname(__FILE__));
require_once($dir . '/config.php');
require_once($dir . '/include/class.upload.php');
require_once($dir . '/include/doc.php');


logf('有人上传文档');


//存数据库并返回一个id，后面根据id请求数据
		
$ctime 	= time();
$year  	= date("Y", $ctime);
$month  = date("m", $ctime);
$day    = date("d", $ctime);

$dir_dest = "$dir/uploads/$year/$month/$day";  # 文档上传的目标地址
if(!file_exists($dir_dest)){			
	if(!mkdir($dir_dest, 0777, true)){
		echoErr("dir_create_failed");
	}
}
 					     
$pic_url = doc_upload_url."$year/$month/$day/";  # 文档的访问url


// we create an instance of the class, giving as argument the PHP object
// corresponding to the file field from the form
// All the uploads are accessible from the PHP object $_FILES
$handle = new Upload($_FILES['my_field']);

// then we check if the file has been uploaded properly
// in its *temporary* location in the server (often, it is /tmp)
if ($handle->uploaded) {
	// yes, the file is on the server
	// now, we start the upload 'process'. That is, to copy the uploaded file
	// from its temporary location to the wanted location
	// It could be something like $handle->Process('/home/www/my_uploads/');
	
	$handle->Process($dir_dest);

	// we check if everything went OK
	if ($handle->processed) {
		// everything was fine !		
		
		//echo '  File: <a href="'.$pic_url.'/' . $handle->file_dst_name . '">' . $handle->file_dst_name . '</a>';
		//echo '   (' . round(filesize($handle->file_dst_pathname)/256)/4 . 'KB)';			
	
		$ret = save_doc($handle->file_dst_name, $pic_url, $handle->file_dst_path, $handle->file_dst_pathname, $handle->file_dst_name_ext);
		if($ret['ret'] != 0){
			echoErr('save_doc_failed:'.$ret['ret']);
		}
		$upload_id = $ret['data'];			
		echoK($upload_id);	//	https://www.starrtc.com/aec/doc/get_doc_info?id=$upload_id	
	} else {
		echoErr('File not uploaded to the wanted location:'.$handle->error);
		// one error occured		
	}	
	$handle-> Clean();// delete the temporary files
} else {
	echoErr('File not uploaded on the server:'.$handle->error);
	// if we're here, the upload file failed for some reasons
	// i.e. the server didn't receive the file	
}




