<?php

session_start();

?>




<?php

require_once('../models/userService.php');

$employee_name = "";
$company = "";
$contact_no = "";
$uname = "";
$password = "";
$type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_REQUEST["ename"])) {

          $ename_err = "name Required";

          


         }else{

              $employee_name = test_input($_REQUEST["ename"]);
         } 
  

    if (empty($_REQUEST["coname"])) {

          $company_err = "company Required";

          


         }else{

              $company = test_input($_REQUEST["coname"]);
         } 

     
     if (empty($_REQUEST["contact"])) {

          $contact_err = "contact no Required";

         

         }else{

              $contact_no = test_input($_REQUEST["contact"]);
         } 


    if (empty($_REQUEST["uname"])) {

          $uname_err = "user name  Required";

          

         }else{

              $uname = test_input($_REQUEST["uname"]);
         }

      if (empty($_REQUEST["password"])) {

          $password_err = "password Required";

          
       }else{

              $password = test_input($_REQUEST["password"]);
         }


         if (empty($_REQUEST["utype"])) {

          $type_err = "type Required";

          


         }else{

              $type = test_input($_REQUEST["utype"]);
         } 


   if (strlen($ename_err) == 0 && strlen($company_err) == 0 && strlen($contact_err) == 0 && strlen($uname_err) == 0 && strlen($password_err) == 0 && strlen($type_err) == 0){


   	$employee = ["ename" => $uname, "company" => $company, "contact" => $contact_no, "uname" => $uname, "password" => $password ,"type" => $type];

    $flag = insertEmployee($employee);

    if ($flag){

       header('location:../interface/employee_list.php?msg=user_inserted');

    }else{
             
        header('location:../interface/employee_register.php?msg=conn_error');  
      
    }
    

 
}else{

  header('location:../interface/employee_register.php?msg=error');
  
}



}


function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  
  } 

?>