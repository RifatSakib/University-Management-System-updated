<?php 
session_start(); 
include "db_conn.php";

 
 

if (isset($_POST['uname']) && isset($_POST['password'])) {
 

	$uname = trim($_POST['uname']);
	$pass =  trim($_POST['password']);
	
	
	     setcookie ("uname",$_POST["uname"],time()+ 3000);
	     setcookie ("password",$_POST["password"],time()+ 3000);
	

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		 

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			
                  if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	  $_SESSION['user_name'] = $row['user_name'];
            	  $_SESSION['name'] = $row['name'];
            	  $_SESSION['id'] = $row['id'];
				
			      $_SESSION['flag'] = true;
					
                header("Location:dashboard.php ");
				
		         
            }else{
				
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        
			
			
		}
		 
          
	}
	
}else{
	header("Location: login.php");
	exit();
}
 
 
   
 
 
 
 
 
 