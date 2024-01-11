<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
	  <script src = './javascript/script.js'></script>
</head>
<body>
<body>

  

    <div class="wrapper">
        <div class="form-holder">
            <h2>Create a New Account</h2>
            
			     <form name="myForm" action="checkreg.php" class="form" method="post" onsubmit="return validatesignup()">
     	 
          
		
		    
		 
		
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
                <div class="form-group">
                    <img src="img/user.png" alt="">
					
					
					 <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name"  id='name' placeholder="Name"><br>
          <?php }?>
					
				 
                </div>
				
				
                <div class="form-group">
                    <img src="img/user.png" alt="">
                     <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
					
					
					
					
                </div>
                <div class="form-group">
                    <img src="img/email.png" alt="">
                    <input type="text" placeholder="Email">
                </div>
                <div class="form-group">
                    <img src="img/lock.png" alt="">
                   <input type="password" name="password"   placeholder="Password"> 
				 
                </div>
				
				
				
				
				
                          <div class="form-group">
                    <img src="img/lock.png" alt="">
					 <input type="password" name="re_password"   placeholder="Confirm Password"> 
                      
                       </div>
					   
					   
                       <div class="form-group">
                  

     	    <button type="submit">Sign Up</button>
                </div>
                <div class="form-group">
                  <a href="login.php" style="color:red" class="ca"> <h3>Already have an account? </h3></a>
                </div>
            </form>
        </div>
    </div>


































 

   

   
                   
	 
    
 
 
 
		 
     </form>
</body>
</html>