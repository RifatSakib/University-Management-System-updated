  
<?php
	session_start();
	if(isset($_SESSION['flag']))
	
?>
 
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
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="delete from course  where coursename='" . $_POST["t2"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo " course has been Dropeed successfully ";
}
?>


<?php include('top.php'); ?>
 
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
 
</div>
<div class="col-sm-9">




  <form name="form" method="post"    onSubmit="return validatedeletecategory()">
<table border="0" width="400px" height="200px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd"> Drop course Name</td></tr>
<tr><td class="lefttxt">Select  </td><td><select name="t2" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from course";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
 

while($data=mysqli_fetch_array($result))
{
	
		echo "<option value=$data[1]>$data[1]</option>";
	
}
mysqli_close($cn);



?>

</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from course where c_id='" .$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
 

$data=mysqli_fetch_array($result);
$Cat_id=$data[0];
$Cat_name=$data[1];


mysqli_close($cn);

}

?>

</td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="Drop" name="sbmt" /></td></tr>
</table>
</form>
</div>


</div>
<?php include('bottom.php'); ?>
 

 
</body>
</html>

