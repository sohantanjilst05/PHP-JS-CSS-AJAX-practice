<?php
if(isset($_REQUEST['submit']))
{
	$degree=$_REQUEST['checkbox'];

  foreach ($degree as $dg ) {
  	 
      echo $dg."<br>";
  }
}
?>