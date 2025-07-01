<?php

require_once('database_conn.php');

function insertEmployee($employee){


$conn = getConnection();


$ename = $employee['ename'];
$company = $employee['company'];
$contact = $employee['contact'];
$uname = $employee['uname'];
$password = $employee['password'];
$type = $employee['type'];

$sql = "INSERT INTO employee_table  VALUES ('', '$ename', '$company', '$contact', '$uname', '$password', '$type')";




if(mysqli_query($conn, $sql)){

			return true; 

		}else{

			return "";

		}

}


?>