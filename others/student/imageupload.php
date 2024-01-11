




  
<?php 
	$title= "profile page";
 
?>










   
					  <?php  
 if(isset($_POST['Submit1']))
{ 
         $filepath = "ima" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=150 width=200 />";
} 
else 
{
echo "Error !!";
}
} 
?>   
 
 
 
 
 
 
 
 
 
 