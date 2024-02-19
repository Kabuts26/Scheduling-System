<?php 
	include('connect.php');
    $id=$_POST['id'];
	if(isset($_POST['submit'])){
        $decpass=$_POST['pass'];
		$pass = password_hash($decpass, PASSWORD_DEFAULT);
		$del_cmd = "UPDATE `client` SET `password` = '$pass' WHERE `client`.`id` = $id;";

		if(mysqli_query($conn,$del_cmd)) {

			header('location:admin_user.php');
			//echo "$del_id has been deleted";

		} else {

			die('No Connection Unable to delete'.mysqli_error_connect());
		}

	}
?>