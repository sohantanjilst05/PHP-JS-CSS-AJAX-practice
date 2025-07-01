<?php

require_once('database.php');

function insertUser($uname,$email,$gender,$dob,$blood){


$conn = getConnection();


$sql = "INSERT INTO ajax_test  VALUES ('', '$uname', '$email', '$gender', '$dob', '$blood')";


    if(mysqli_query($conn, $sql)){

			return true;

		}else{

			return "";

		}

	}


function emailExist($email){

	$conn = getConnection();

	$sql = "SELECT * FROM ajax_test WHERE email='$email'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

    if($row > 0){

				
               return true;
				

			}else{

				return "";
			}


}

?>