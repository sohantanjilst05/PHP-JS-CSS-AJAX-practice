<?php

session_start();

?>


<?php


if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "conn_error"){

			echo "conn error found";
		}

		/*if($_GET['msg'] == "null_username"){
			echo "Username field is empty...";
		}

		if($_GET['msg'] == "null_password"){
			echo "Password field is empty...";
		}*/
	}

?>





<!DOCTYPE html>
<html>
<head>
	<title>insert User</title>
</head>
<body>
<div align="center">
	<form method="post" action="../php/insert_user_check.php">
		<fieldset style="width: 450px">
			<legend>Insert User</legend>
			<table>
				<tr>
					<td>User Name</td>
					<td>
						:<input type="text" name="uname" value="<?php echo $_SESSION["form_uname"] ?? "" ; ?>">

						<span> <?php echo $_SESSION["uname_error"] ?? "" ; ?></span>
					</td>
				</tr>
				<tr>
					<td><hr>Password</td>
					<td><hr>
						:<input type="Password" name="password" value="<?php echo $_SESSION["form_pass"] ?? "" ; ?>">

                           <span> <?php echo $_SESSION["password_error"] ?? "" ; ?></span>

					</td>
				</tr>

				<tr>
					<td><hr>Email</td>
					<td><hr>
						:<input type="Email" name="email" value="<?php echo $_SESSION["form_email"] ?? "" ; ?>">

                          <span> <?php echo $_SESSION["email_error"] ?? "" ; ?></span>

					</td>
				</tr>

				<tr>
					<td><hr>Type</td>
					<td><hr>

						<?php $type = $_SESSION["form_type"] ?? "" ; ?>

						<input type="radio" name="type" <?php if (isset($type) && $type == "user") {echo "checked";} ?>

						value="user">User
						<input type="radio" name="type" <?php if (isset($type) && $type == "admin") {echo "checked";} ?>

						value="admin">Admin


						<span> <?php echo $_SESSION["type_error"] ?? "" ; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" > <hr>

                       <input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>

<?php


unset($_SESSION["form_uname"]);
unset($_SESSION["uname_error"]);
unset($_SESSION["form_pass"]);

unset($_SESSION["password_error"]);
unset($_SESSION["form_email"]);
unset($_SESSION["email_error"]);

unset($_SESSION["form_type"]);

unset($_SESSION["type_error"]);

?>