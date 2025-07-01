<?php

session_start();

if(!isset($_COOKIE['edit_profile']))
{
	header('location: login.php'); 
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
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
		<td class="middle"  height="360px">
			<ul type="none" >
				 
				<li><h3>Accounts</h3></li>
			</ul>
			<ul>
				<li><a href="logged_in_dashbord.php">Dashbord</a></li>
				<li><a href="profile_view_check.php">View Profile</a></li>
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="change_profile_picture.php">Change profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</td>
		<td colspan="2">
		<div align="center">
             
			<form method="post" action="edit_profile_handler.php">

				<fieldset style="width: 600px; height: 460px; margin-top: 20px">
					<legend>Profile</legend>
					<div style="color: red;">
             	     <?php

	                          if(isset($_GET['error'])){
		
		                         if($_GET['error'] == "empty_username"){
			                            echo "Error:Give a new Name";
		                                 }

		                             if($_GET['error'] == "name_incorrect"){

			                            echo "Error:Must start with a letter, And Only letters and white space allowed";
		                                }

		                             if($_GET['error'] == "at_least_two_letters"){
			                            echo "Error:Name should contain atleast two letters";
		                                  }

		                              if ($_GET['error'] == "email_empty") {
		                              	echo "Error:Give a new email";
		                              }

		                              if ($_GET['error'] == "incorrect_email") {
		                              	
		                              	echo "Error:Email incorrect";
		                              }

		                              if ($_GET['error'] == "gender_required") {
		                              	
		                              	echo "Error:Choose a Gender";
		                              }

		                              if ($_GET['error'] == "date_empty") {
		                              	
		                              	echo "Error:Give your date of Birth";
		                              }
	                                }

                                 ?>

                     </div>
					<table style="width: 550px; height: 430px; border: none;">
						<tr>
							<td>Name</td>
							<td>:<input type="text"  name="editName" value=""></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:<input type="Email" name="editEmail"></td>
							
						</tr>
						<tr>
							<td>Gender</td>
							<td>
								:<input type="radio"  name="egender" value="Male"> Male
                                <input type="radio"  name="egender" value="Female"> Female
                                <input type="radio"  name="egender" value="other"> Other 
							</td>
							
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td>:<input type="Date" name="editDate"></td>
							
						</tr>
						<tr>
							<td colspan="2" style="border-bottom: none;"><input type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>
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

