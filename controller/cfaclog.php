

<?php 

session_start();

$UserID="19-39767-1";
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