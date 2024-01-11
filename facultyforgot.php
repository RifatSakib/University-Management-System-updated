<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
</head>
<body style="background-color:white;">  

<?php

$cpassErrErr =  $passErr=  $emailErr="" ;
$cpass = $pass =  $email="";
$sp= "/(?=.*?[#?!@$%^&*-])/";
$min= "/.{8,}/";



   

   

    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email="";
    }
  }
    



    if  (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else  {
    $pass= test_input($_POST["password"]);
    // check if name only contains letters and whitespace
     
    if (!preg_match("/(?=.*?[#?!@$%^&*-])/",$pass)) {
      $passErr = "Write special char";
     
     
    }

    else if  (!preg_match($min,$pass)) {
   $passErr="MINIMUM number 8";

}
else{
     $passErr="";
}

    }

    if  (empty($_POST["cpass"])) {
    $cpassErr = "Password is required";
  } else  {
    $cpass= test_input($_POST["cpass"]);
    // check if name only contains letters and whitespace
     
    if (!preg_match("/(?=.*?[#?!@$%^&*-])/",$cpass)) {
      $cpassErr = "Write special char";
     
     
    }

    else if  (!preg_match($min,$cpass)) {
   $cpassErr="MINIMUM number 8";

}
if($cpass!=$pass){
   $cpassErr="Confirm Password doest Matched";
}
else{
     $cpassErr="";
}

    }
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Need to new password? No tension--------</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>



 Password: <input type="text" name="password" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

 Confirm password: <input type="text" name="cpass" value="<?php echo $cpass;?>">
  <span class="error">* <?php echo $cpassErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  <br><br>
 
<p><a href="HomePage.php"> Goto to home page </a> </p>
           <p><a href="facultylog.php"> Goto to login page </a> </p>

      </body>  
 </html>  