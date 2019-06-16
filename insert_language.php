<?php
include "config.php";


	
 
	$txt_name=$_POST['txt_name'];
	$email=$_POST['email'];
    $address=$_POST['address'];

	
		$sql = mysql_query("INSERT INTO `user` (`name`,`email`,`address`)
		VALUES ('$txt_name','$email','$address')")or die(mysql_error($conn));

		if ($sql== TRUE) {

			echo "1";
		} 

		else {
			echo "2 " .mysql_error($conn);
		}
  
	


?>