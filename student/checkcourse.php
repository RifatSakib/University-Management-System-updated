 <?php
    session_start();    
    if(isset($_POST['cname'])  || isset($_POST['cdesc']))
    {
        $cname = $_POST['cname'];
       
                       $cdesc = $_POST['cdesc'];
     
    
        }
        
 
        
        echo "Registered successfully!";
        $_SESSION['cname'] = $cname;
  
        $_SESSION['cdesc'] = $cdesc;
        
  

        $_SESSION['flag'] = true;
        // echo $_SESSION['username'];
        // echo $_SESSION['password'];
        // echo $_SESSION['flag'];
		
        header('location: viewcourse.php');
    
?>