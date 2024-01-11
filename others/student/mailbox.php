
<?php if(!isset($_SESSION)) { session_start(); } ?>
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
 

<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">

</div>
<div class="col-sm-9">


<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  

	 <?php include('top.php'); ?>
                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contact (Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Thank You for contact us');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters   "></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers "></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	  <?php include('bottom.php'); ?>
</body>
</html>     