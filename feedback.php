<?php include('navbar.php');?>
<html>
<head>
<title>PHP File create/write</title>
</head>
<body>



<FORM method="POST">




Your Comment : <textarea name="comment" rows="5" cols="40"> </textarea>
<br/>
<input type="submit" name="Submit1" value="Upload">
</FORM>
<?php



if(isset($_POST['Submit1']))
{
//open file abc.txt in append mode
$myfile = fopen("abc.txt", "w");



$text = $_POST["comment"];



fwrite($myfile, $text);



fclose($myfile);
}



?>



</body>
</html>