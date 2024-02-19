<?php

//Sequence server, username, password, database name

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "law_firm";

	$conn = mysqli_connect($servername,$username,$password,$db_name);

		if(!$conn) {

			die("Connection Error " . mysqli_connect_error());

		} else {

				}

?>