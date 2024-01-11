<?php  
require_once 'controller/studentInfo.php';

$student = fetchStudent($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
</head>
<body>

<table>
	<tr>
		
		<th>Sname</th>
		<th>ID</th>
		<th>Email</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"></a></td>
		<td><?php echo $student['Surname'] ?></td>
		<td><?php echo $student['ID'] ?></td>
		<td><?php echo $student['Email'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>