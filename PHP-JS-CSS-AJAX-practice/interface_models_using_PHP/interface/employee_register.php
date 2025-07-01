<?php


if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "conn_error"){

			echo "conn error found";
		}

		
		if($_GET['msg'] == "error"){

			echo "error found";
		}


	}

?>






<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<div align="center">
	<form method="post" action="../php/employee_reg_check.php">
		<fieldset style="width: 400px">
			<legend>New Employee</legend>
			<table>
				<tr>
					<td>Employee Name</td>
					<td><input type="text" name="ename"></td>
				</tr>

				<tr>
					<td><hr>Company Name</td>
					<td><hr><input type="text" name="coname"></td>
				</tr>

				<tr>
					<td><hr>Contact No</td>
					<td><hr><input type="text" name="contact"></td>
				</tr>

				<tr>
					<td><hr>User name</td>
					<td><hr><input type="text" name="uname"></td>
				</tr>

				<tr>
					<td><hr>Password</td>
					<td><hr><input type="Password" name="password"></td>
				</tr>

				<tr>
					<td><hr>User Type</td>
					<td><hr><input type="text" name="utype"></td>
				</tr>

				<tr>
					<td colspan="2"><hr><input type="submit" name="submit" value="Submit"></td>
				</tr>

			</table>
		</fieldset>
	</form>
</div>
</body>
</html>