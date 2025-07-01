<?php

session_start();

if(!isset($_COOKIE['view_profile']))
{
	header('location: login.php'); 
}

?>





<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
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
				<li><a href="view_profile.php">View Profile</a></li>
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="change_profile_picture.php">Change profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</td>
		<td colspan="2">
			<div align="center">
				<fieldset style="width: 650px; height: 460px;">
					<legend>Profile</legend>
					<table style="width: 550px; height: 450px; border: none;">
						<tr>
							<td>Name</td>
							<td>:<?php         
                                       $name=$_SESSION['user_name'];
                                       
                                       echo "$name";

							           ?> </td>

							<td rowspan="2">
								<div style="height: 170px;width: 170px;border: 1px solid black;">
									<img align="center" src="user.PNG" height="140px" width="140">
									<a  href="change_profile_picture.php">Change</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:<?php 
                                    $email=$_SESSION['user_email'];
                                     
                                     echo "$email";
                                    
							       ?></td>
							
						</tr>
						<tr>
							<td>Gender</td>
							<td>:<?php
                                $gender=$_SESSION['user_gender'];

                                echo "$gender";

							?></td>
							<td></td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td>:<?php
                                  $dob=$_SESSION['user_dob'];
                                  echo "$dob";

							?>

							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3" style="border-bottom: none;"><a href="edit_profile.php">Edit Profile</a></td>
						</tr>
					</table>
				</fieldset>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" colspan="3"><h3>Copy Right</h3></td>
	</tr>
   </table>
</body>
</html>