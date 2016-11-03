<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
$packageID = '';
$customerID = '';
	if(isset($_GET['packageID'])){
	require('UploadHandler.php');
	$upload_handler = new UploadHandler();
	}else if(isset($_GET['customerID'])){
		require('CuUploadHandler.php');
		$upload_handler = new UploadHandler();
	}else if(isset($_GET['shopimageID'])){
		require('SpUploadHandler.php');
		$upload_handler = new UploadHandler();
	}


