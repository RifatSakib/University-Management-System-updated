<?php include('Faclog.php');?>

<html>  
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
  <div class="you"> <h3 > Your UserID & Password is correct.</h3></div><br><br><br>
  </body></html>


<?php 

session_start();

if (isset($_SESSION['uname']))



{
    


    echo "<br><br><a href='faclog2nd.php'>Go to main Profile</a><br><br><br>";


echo "<a href='facultylog.php'>Log Out</a><br>";

}
else{
        header("location:facultylog.php");
        // echo "<script>location.href='login.php'</script>";
    }

 ?>