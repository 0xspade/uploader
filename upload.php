<?php
	function file_sanitizer($file){ return htmlspecialchars(filter_var($file, FILTER_SANITIZE_STRING)); }

	$name = $_FILES['file']['name'];
	$allowed = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $name);
	$ext = strtolower(end($temp));
	$type = file_sanitizer($_FILES['file']['type']);
	$size = $_FILES['file']['size'];
	$error = $_FILES['file']['error'];
	$tmp = $_FILES['file']['tmp_name'];

	if(($type == "image/gif" || $type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/x-png" || $type == "image/pjpeg") && in_array($ext, $allowed)){

		if($error > 0){
			echo "error";
		}else{

			$newfile = md5(sha1(uniqid('', true))).'.'.$ext;
			$filedestination = "uploads/";

				if( move_uploaded_file($tmp, $filedestination.$newfile) ){

					echo $filedestination.$newfile;

				}else{

					echo "error";
				}
			
		}

	}else{ echo "invalid_file"; exit(); }

?>