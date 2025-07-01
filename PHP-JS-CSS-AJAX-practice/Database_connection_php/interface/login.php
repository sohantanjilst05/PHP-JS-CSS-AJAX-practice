<?php

	if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "invalid_user"){

			echo "User Invalid";
		}

		if($_GET['msg'] == "empty_username"){

			echo "give a username";
		}

		if($_GET['msg'] == "empty_password"){

			echo "give your password";
		}
	}

	/*if(isset($_COOKIE['rm'])){
		header('location: home.php');
	}*/
?>





<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
 <div>
 	<form method="post" action="../php/login_check.php">
 		<fieldset>
 			<legend>LOGIN</legend>
 			<table>
 				<tr>
 					<td>User Name</td>
 					<td>
 						:<input type="text" name="uname" value="">
 					</td>
 				</tr>
 				<tr>
 					<td>Password</td>
 					<td>
 						:<input type="Password" name="password" value="">
 					</td>
 				</tr>

 				<tr>
 					<td colspan="2"> <input type="submit" name="submit" value="login"></td>
 				</tr>
 			</table>
 		</fieldset>
 	</form>
 </div>
</body>
</html>