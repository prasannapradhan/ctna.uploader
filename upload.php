<?php

$oid = $_GET['oid'];
error_log("Handling order [$oid]");

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$upload_handler = new UploadHandler();
$upload_handler->options['oid'] = $oid;
