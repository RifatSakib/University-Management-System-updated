<?php

$conn= mysqli_connect("localhost","root","","try");
$result=mysqli_query($conn,"SELECT * FROM newt");
$data=array();
while ($row=mysqli_fetch_assoc($result))
{

	$data[]=$row;
}

echo json_encode($data);
