<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style>
		li.header{
            display: inline;
           }

      table{
      	border: 1px solid black;
      	border-collapse: collapse;
      }

      td{
        	border-bottom: 1px solid black;
        }
        .middle{

        	border-right: 1px solid black;
        }
	</style>
</head>
<body>
   <table width="100%">
   	<tr style="height: 30px">
		<td width="300px"><img align="left" src="logo.PNG" height="60px" width="100px"></td>
		<td width="500px"></td>
		<td >
			<ul type="none" >
				<li class="header">Logged in as |</li>
				<li class="header"><a href="logout.php">Logout</a></li>
			</ul>
		</td>
	</tr>
	<tr>
		<td class="middle">
			<ul type="none" >
				 
				<li><h3>Accounts</h3></li>
			</ul>
			<ul>
				<li><a href="logged_in_dashbord.php">Dashbord</a></li>
				<li><a href="profile_view_check.php">View Profile</a></li>
				<li><a href="profile_edit_check.php">Edit Profile</a></li>
				<li><a href="change_profile_picture.php">Change profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</td>
		<td colspan="2">
			<div align="center">
				<form method="post" action="change_password_handler.php" >
				<fieldset style="width: 400px">

					<legend>Change Password</legend>

					<div style="color: red;">
						<?php

                         if(isset($_GET['error'])){
		
		                            if($_GET['error'] == "incorrect_newpass"){
			                            echo "password did not matched";
		                                 }


		                             if($_GET['error'] == "current_pass_incorrect"){
			                            echo "Password incorrect";

		                                }

	                                }


						?>

						
				   </div>
                    Current Password:<input type="Password" name="crpassword" value=""><br><br>
                    New Password:<input type="Password" name="npassword" value=""><br><br>
                    Retype New Password:  <input type="Password" name="repassword" value=""><br>

                    <hr>
                    <input type="submit" name="submit" value="Submit">  
				</fieldset>
				</form>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" colspan="3"><h3>Copy Right</h3></td>
	</tr>
   </table>
</body>
</html>