<?php
	$target_dir = "/var/www/html/resources/uploader";
	$fname = "upic".time().".jpg";
	$target_file = $target_dir. "/".$fname;
	
	$tmp_file = $_FILES['upfile']['tmp_name'];
	error_log(file_get_contents($tmp_file));
	
	$resp = array();
	if(move_uploaded_file($tmp_file, $target_file)) {
		$resp['status'] = 'SUCCESS';
		$resp['fname'] = $fname;
		echo json_encode($resp);
	} else{
		$resp['status'] = 'FAILURE';
		echo json_encode($resp);
	}
?>