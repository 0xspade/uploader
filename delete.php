<?php  
 if(isset($_POST['path'])){
 	if(unlink($_POST['path'])){
 		echo "image_deleted";
 	}else{
 		echo "wew";
 	}
 }else{
 	echo "fuck_off";
 }
 ?>  