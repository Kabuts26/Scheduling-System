<?php 
	include('connect.php');
	if(isset($_GET['id'])){

		$del_id = $_GET['id'];
		$del_cmd = "UPDATE `appointment` SET `status` = 'accomodated' WHERE `appointment`.`id` = '$del_id';";

		if(mysqli_query($conn,$del_cmd)) {

			header('location:atty_appoint.php');
			//echo "$del_id has been deleted";

		} else {

			die('No Connection Unable to delete'.mysqli_error_connect());
		}

	}
?>