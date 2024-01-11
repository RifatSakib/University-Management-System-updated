 

<?php if(!isset($_SESSION)) { session_start(); } ?>

<?php

  

          if(isset($_POST['t1']){
	  $t1 = $_POST['t1'];
	 
	    for($i=0;$i<strlen($t1);$i++)
        {
            if(!((ord($t1[$i]) >= 97 && ord($t1[$i]) <= 122)) && !((ord($t1[$i]) >= 65 && ord($t1[$i]) <= 90)))
            {
                echo 't1 can only be alphabetical';break;
                return;
            }
        }

	 
	 
 }


if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into course(coursename) values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo  "course has been succesfully added";
	
}

  
?>