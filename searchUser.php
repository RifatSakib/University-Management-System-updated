
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
</head>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findUser.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>


 
  </body>
</html>