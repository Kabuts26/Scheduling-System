
<?php 
include('session2.php');
 ?>
<!DOCTYPE html>
<html>
<?php?>
<head>
	<title>OTP</title>
</head>
<?php
include('links.php');  ?>
<body style="background-color: #f2f7ff;">
	<div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="margin-top: 10%;" align="center">
				<div class="otp">
					<p class="headerverify">Enter the verification code</p>
					<img src="img/otpicon.png" width="250" height="250">


	<form method="POST">
		<input type="number" name="otp" maxlength="6" class="textverify" placeholder="Enter the 6 digit code">
		<input type="hidden" name="otp1" value="<?php $s=$_GET['id']; echo $s;  ?>">
		<input type="submit" name="verify" value="Verify" class="btnverify btn bg-success">

	</form>

	<?php
	
		if (isset($_POST['verify'])) {
			$otp=$_POST['otp1'];
			$otp1="'".$_POST['otp']."'";
			
			if ($otp == $otp1) {
				

			include('connect.php');


  echo "Verify Successful";
      date_default_timezone_set('Asia/Manila');
            $date = date("Y-m-d h:i:sa");
			$pass=$_SESSION['password'];
			$hashed_pass=password_hash($pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `client` (`id`, `fname`,`lname`,`middle_int`, `contact_no`, `email`, `gender`, `password`, `age`, `address`) VALUES (NULL,'".$_SESSION['fname']."', '".$_SESSION['lname']."', '".$_SESSION['middle_int']."','".$_SESSION['contact_no']."', '".$_SESSION['email']."', '".$_SESSION['gender']."', '".$hashed_pass."', '".$_SESSION['age']."','".$_SESSION['address']."')";
           
              
            if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
   header("Location:login1.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

			}
			else{
				echo "Wrong OTP";
			}
		}

	  ?>
	  			</div>
	  		</div>
		</div>
	</div>

</body>
</html>