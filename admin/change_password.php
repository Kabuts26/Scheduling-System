<?php 
	include('connect.php');
    $id=$_POST['id'];
	if(isset($_POST['submit'])){
		$decpass=$_POST['pass'];
		$pass = password_hash($decpass, PASSWORD_DEFAULT);

		$del_cmd = "UPDATE `atty` SET `pass` = '".$pass."' WHERE `atty`.`atty_id` = $id;";

		if(mysqli_query($conn,$del_cmd)) {

			header('location:admin_atty.php');
			//echo "$del_id has been deleted";

		} else {

			die('No Connection Unable to delete'.mysqli_error_connect());
		}

	}
?>