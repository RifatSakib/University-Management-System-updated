<?php  
require_once 'controller/studentInfo.php';

$students = fetchAllStudents();


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
	<thead>
		<tr>
			
			<th>Sname</th>
			<th>ID</th>
			<th>Email</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $i => $student): ?>
			<tr>
				<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"></a></td>
				<td><?php echo $student['Sname'] ?></td>
				<td><?php echo $student['ID'] ?></td>
				<td><?php echo $student['Email'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" </td>
				<td><a href="editStudent.php?id=<?php echo $student['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>