<!DOCTYPE html>
<html>
<head>
	<title>User Dashbord</title>
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
				<li><a href="profile_edit_check.php">Edit Profile</a></li>
				<li><a href="change_profile_picture.php">Change profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</td>
		<td colspan="2">
			<h2>Welcome</h2>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" colspan="3"><h3>Copy Right</h3></td>
	</tr>
   </table>
</body>
</html>