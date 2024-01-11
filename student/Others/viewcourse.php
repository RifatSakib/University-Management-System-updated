<  
<?php
	session_start();
	if(isset($_SESSION['flag']))
	
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




 
</head>
<body>
 

<?php include('function.php'); ?>
 


<?php include('top.php'); ?>
 
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">

</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View Course </td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="70%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">Course Id</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Course  Name</td></tr>

<?php

$s="select * from course";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
 

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>$data[0]</td><td style=' padding:5px;'>$data[1]</td></tr>";

}




?>

</table>
</td></tr></table>

</form>



</div>


</div>
<?php include('bottom.php'); ?>
 
</body>
</html>