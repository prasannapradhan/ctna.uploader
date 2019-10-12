<?php
	$target_dir = "/var/www/html/resources/uploader";
	$fname = "upic".time().".jpg";
	$target_file = $target_dir. "/".$fname;
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