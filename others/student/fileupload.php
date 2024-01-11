<?php
	$title= "file upload page";
	include('header.php');
?>


    <fieldset>
 
	<form method="post" action="./filecheck.php" enctype="multipart/form-data">
	
 
	 

 
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="upload">
 
	<h2> <a href="dashboard.php">  Dashboard</a> </h2>
	</form>
	 
	 
	</fieldset>
	
</body>
</html>