<?php
if(isset($_REQUEST['submit'])){
	
	$gen=$_REQUEST['gender'];
	echo "$gen";
}else{
	echo "Select a Gender";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender field</title>
</head>
<body>
<form method="post">
	<fieldset>
		<legend>Gender Field</legend>
  <input type="radio" id="male" name="gender" value="male">Male
  <input type="radio" id="female" name="gender" value="female">Female
  <input type="radio" id="other" name="gender" value="other">Other <br>
  <hr>
  <input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>