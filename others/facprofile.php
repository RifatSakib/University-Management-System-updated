




<?php include('cedit.php'); ?>


<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
<title>Edit Profile</title>
<script src="../js/edit.js"></script>
</head>
<body>




<h1 align='center'>Edit Profile</h1>

<form action="" method="post">
   

            Change Name:<input type="text" name="name" placeholder="Enter your full Name" >
        <?php echo $validateName?><br><br>
       
            Change Email::::<input type="text" name="email" placeholder="Enter Your Email" >
        <?php echo $validateEmail?><br><br>
  


    <br>
    

        Change Date of Birth::::   
            <input type="date" id="birthday" name="birthday"><?php echo $validateDateOfBirth?>

            <br><br>
            
                Change Phone Number:::::<input type="text" name="phonenumber" placeholder="Enter mobile number" >
            <?php echo $validatePhonenumber?> <br><br>
            
                Write the OTP<input type="text" name="otp" placeholder="Enter OTP" ><br><br>
        
         
                Change Present Address::::<textarea name="presentAddress" placeholder="Your present Address" rows="4"cols="30" ></textarea><?php echo $validatePresentAddress?> <br><br>
             Change Permanent Address:<textarea type="text" name="permanentAddress" placeholder="Your permanent Address" rows="4"cols="30"></textarea>><?php echo $validatePermanentAddress ?> <br><br>
      
        
        
    

            <input name="submit" type="submit" value="Change">
        </form>
  <a href="vprofile.php"> Go Back To View Profile </a><br><br>
<a href="HomePage.php"> Go Back To Home Page </a><br><br>
<a href="faclog2nd.php"> Go Back To Dashboard </a>
</body>

</html>


