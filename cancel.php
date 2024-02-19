<?php 
	include('connect.php');
	if(isset($_GET['cancel'])){

		$del_id = $_GET['cancel'];
		$del_cmd = "Delete FROM appointment WHERE id='$del_id'";

		if(mysqli_query($conn,$del_cmd)) {

			header('location:appoint.php');
			//echo "$del_id has been deleted";

		} else {

			die('No Connection Unable to delete'.mysqli_error_connect());
		}

	}
?>