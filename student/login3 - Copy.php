 
<html>
<head>
	<title>LOGIN</title>
	 
	 
	 
	 
	 
	 
	 
	 <head>
	     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
	 <script src = './javascript/script.js'></script>
	 </head>
	 
	 
	 
	 
	 
	 
	 
	 
 
<body>

        <table width='100%' >
            <tr>
                 
                <td align='right'>
                    <nav>
                         
                        <a href='home.php'> Home Page </a>  
                     
                    </nav>
                </td>
            </tr>
        </table> 
        <form name="myForm"action="checklogin.php" method="post" onsubmit="return validatelogin()">
	 
	 <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
	 
	 
	 
	 <div class="wrapper">
        <div class="form-holder">
            <img src="img/user.png" class="logo" alt="">
            <h2> Admin Login </h2>
            <form action="" class="form">
                <div class="form-group">
                    <img src="img/user.png" alt="">
					<input type="text" name="uname" placeholder="User name">
                   
                </div>
                <div class="form-group">
                    <img src="img/lock.png" alt="">
					<input type="password" name="password" id = "pswd" placeholder="Password">
                    
                </div>
                <div class="form-group">
                     <button type="submit"> Login</button>
                </div>
                <div class="form-group">
                     
                        <a href="registration.php" style="color:red" class="ca"><h3>   Create an account </h3></a>  
                </div>
            </form>
        </div>
    </div> 
	 
</body>
</html>