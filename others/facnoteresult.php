<!DOCTYPE html>  
<html>
<head>
	<meta charset="UTF-8">
<title>Upload file</title>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
</head>
<body style="background-color:white;">
	
<form action="" method="post" encrypt="multipart/form-data">

<input type="file" name="myfile">

<button type="submit" name="submit"> Upload</button>



</form>

<?php




if(isset($_POST['submit'])){
	$fileName=$_FILES['myfile']['name'];
}
$fileType=$_FILES['myfile']['type'];
$fileTmpN=$_FILES['myfile']['tmp_name'];

$fileErr0=$_FILES['myfile']['error'];
$filesize=$_FILES['myfile']['size'];

move_uploaded_file($fileName, destination)



}





?>

</body>
</html>