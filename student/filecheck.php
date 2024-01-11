<?php

	$file_info = $_FILES['myfile'];
	$path = 'E:\uploads'.$file_info['name'];

	if(move_uploaded_file($file_info['tmp_name'], $path))
	{
		//echo "successfully file uploaded";
		 header('location:  success.php');
		
	}else{
		echo "error";
	}
?>