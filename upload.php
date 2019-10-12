<?php
	$target_dir = "/var/www/html/resources/apps/common/uploads/";
	$fname = "upic".time().".jpg";
	$target_file = $target_dir. "/".$fname;
	
	$resp = array();
	if(move_uploaded_file($_FILES['upic_uploader']['tmp_name'], $target_path)) {
		$resp['status'] = 'SUCCESS';
		$resp['fname'] = $fname;
		echo json_encode($resp);
	} else{
		$resp['status'] = 'FAILURE';
		echo json_encode($resp);
	}
?>