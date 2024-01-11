 




<?php 
session_start(); 
include "db_conn.php";
              

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	 

	$uname = ($_POST['uname']);
	$pass =($_POST['password']);

	$re_pass =($_POST['re_password']);
	$name = ($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	              
	
	    for($i=0;$i<strlen($uname);$i++)
        {
            if(!((ord($uname[$i]) >= 97 && ord($uname[$i]) <= 122)) && !((ord($uname[$i]) >= 65 && ord($uname[$i]) <= 90))  && !((ord($uname[$i]) >= 48 && ord($uname[$i]) <= 57)))
            {
                header("Location:registration.php ?error= username is required&$user_data");
                return;
            }
        }
	
	
	
	
	       if( $pass == "" ){
        header("Location: registration.php? error=Password is required&$user_data");
	    exit();
	}
	     else if( $re_pass == ""){
        header("Location: registration.php? error=Re Password is required&$user_data");
	    exit();
	}

	      else if($name == ""){
        header("Location:registration.php?error=Name is required&$user_data");
	    exit();
	}
	
	     else  if($pass < 6){
		
        header("Location: registration.php?error=The  password   must be atleast 6 character &$user_data");
	    exit();
	                                               }
	

	              else  if($pass != $re_pass){
		
              header("Location: registration.php? error=The confirmation password  does not match&$user_data");
	    exit();
	}
	 
	                     

	else{
 

	     $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		     if (mysqli_num_rows($result) > 0) {
				 
			  header("Location:registration.php?  error=The username is Alrady taken try another&$user_data") ;
	          exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location:  login.php");
	         exit();
           }else {
	           	header("Location: registration.php?error=unknown error occurred&$user_data");
		        exit();
           }
		   
           $_SESSION['name'] = $name;
			$_SESSION['uname'] = $uname;
           $_SESSION['password'] = $password;
		    $_SESSION['flag'] = true;
		}
	}
	
	  
	      
	
	
}else{
	header("Location: registration.php");
	exit();
}

  