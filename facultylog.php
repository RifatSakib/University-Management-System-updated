<?php include('navbar.php');?>



<?php 

session_start();

$UserID="18-38215-2";
$password="12345678";

if (isset($_POST['uname']))


 {
  if ($_POST['uname']==$UserID && $_POST['pass']==$password) {
    $_SESSION['uname'] = $UserID;
    header("location:faclogfirst.php");
  }
  else{
    $msg="UserID or password invalid";
    // echo "<script>alert('uname or pass incorrect!')</script>";
  }

}

 ?>
<html>  
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
<link rel="stylesheet" type="text/css" href="homepage.css">
<script src="log.js"></script>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="esha">
  <p style="color: red;"> *UserId and password required</p>
  <table align="center">
    
    <tr>
      <th colspan="2"><h2>Login---Enter your ID & Password</h2></th>
    </tr>
    <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
      <?php } ?>
    <tr>
      <td>UserID</td>
      <td><input type="text" name="uname"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="pass"></td>
    </tr>
    <input type="checkbox" name="remember" /> Remember me  
    <tr>
      <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
    </tr>
  </table>
  </div>
</form>
<a href="facultyforgot.php">Forgot Password?</a><br><br>
<button><a href="HomePage.php">Go To HomePage </button></a></button></body></html>
