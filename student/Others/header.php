<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: login.php');
	}
?>
 
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
