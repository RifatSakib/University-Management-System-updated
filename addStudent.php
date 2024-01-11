<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
 
  <label for="surname"><b>Sname:<b></label><br><br>
  <input type="text" id="surname" name="surname"><br><br>
  <label for="username">ID:</label><br><br>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Email:</label><br><br>
  <input type="text" id="password" name="password"><br><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="Add">
  <input type="Reset"> <br><br>
</form> 

</body>
</html>

