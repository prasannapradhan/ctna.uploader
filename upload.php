<?php
	$target_dir = "/var/www/html/resources/apps/common/uploads/";
	$fname = "upic".time().".jpg";
	$target_file = $target_dir. "/".$fname;
	
	error_log(json_encode($_FILES));
	error_log(json_encode($_POST));
	
	$resp = array();
	if(move_uploaded_file($_FILES['upfile']['tmp_name'], $target_file)) {
		$resp['status'] = 'SUCCESS';
		$resp['fname'] = $fname;
		echo json_encode($resp);
	} else{
		$resp['status'] = 'FAILURE';
		echo json_encode($resp);
	}
?>