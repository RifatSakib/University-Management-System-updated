 
<html>
<head>
 
<title></title>
</head>

<body>
  
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","iqbal");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("localhost","root","","iqbal");
?>
</body>
</html>