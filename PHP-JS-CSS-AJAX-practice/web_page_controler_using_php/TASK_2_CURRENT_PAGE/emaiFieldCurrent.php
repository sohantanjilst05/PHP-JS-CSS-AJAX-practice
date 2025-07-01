<?php

 if(isset($_REQUEST['submit']))
                 {
	              $email= $_REQUEST['email'];
	              echo "$email";

                 }
             
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email field</title>
</head>
<body>
<form method="post">
	<fieldset style="width:200px;" >
		<legend>Email</legend>
		Email:<input type="email" name="email" value=""><br>
		     <hr>
		     <input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>