<?php

    session_start();
	require_once('../database/database.php');

?>

<?php

if(isset($_GET['id'])){
		
		
		$_SESSION["delete_uid"] = $_GET['id'];

		

	
	}

?>

<?php

        $uid = $_SESSION["delete_uid"];

		echo $uid;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete user</title>
</head>
<body>
<div align="center">
	<form method="post" action="../php/delete_user_check.php">

       <?php 

       $conn = getConnection();

	   $sql = "SELECT * FROM user_table WHERE id='$uid'";
	   $result = mysqli_query($conn, $sql);

       $data = mysqli_fetch_assoc($result); 


       ?>

		<fieldset style="width: 450px">
			<legend>Insert User</legend>
			<table>
				<tr>
					<td>User id</td>
					<td>
						:<input type="text" name="uid" value="<?php echo $data['id'] ?? "" ; ?>">

						
					</td>
				</tr>
                
                <tr>
					<td><hr>User Name</td>
					<td><hr>
						:<input type="text" name="uname" value="<?php echo $data['user_name'] ?? "" ; ?>">

						<span><?php /*echo $_SESSION["update_uname_error"] ?? "" ; */?></span>
					</td>
				</tr>


				<tr>
					<td><hr>Password</td>
					<td><hr>
						:<input type="Password" name="password" value="<?php echo $data['password'] ?? "" ; ?>">

                           <span> <?php /*echo $_SESSION["update_password_error"] ?? "" ;*/ ?></span>

					</td>
				</tr>

				<tr>
					<td><hr>Email</td>
					<td><hr>
						:<input type="Email" name="email" value="<?php echo $data['email'] ?? "" ; ?>">

                          <span> <?php /*echo $_SESSION["update_email_error"] ?? "" ; */?></span>

					</td>
				</tr>

				<tr>
					<td><hr>Type</td>
					<td><hr>

						<?php $type = $data['type'] /*?? ""*/ ; ?>

						<input type="radio" name="type" <?php if (isset($type) && $type == "user") {echo "checked";} ?>

						value="user">User

						<input type="radio" name="type" <?php if (isset($type) && $type == "admin") {echo "checked";} ?>

						value="admin">Admin


						<span> <?php /*echo $_SESSION["update_type_error"] ?? "" ; */?></span>

					</td>
				</tr>
				<tr>
					<td> <hr>

                       <input type="submit" name="submit" value="Delete">
					</td>

					<td><hr>
						
						<a href="user_list.php">see user list</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>
