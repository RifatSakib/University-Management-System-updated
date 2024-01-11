	<?php
	
	require_once('function.php');
	
	
	
	 

		$conn = getConnection();
		$sql = "insert into customer values('', '{$customers['name']}', '{$customers['username']}', '{$customers['password']}', '{$customers['email']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	 
?>