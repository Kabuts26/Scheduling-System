
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
            $sql = "INSERT INTO `atty` (`atty_id`, `office_name`, `lname`, `fname`, `law_school`, `year_graduated`, `office_address`, `school_address`, `email`, `pass`, `gender`, `office_contact`, `contact_no`, `img`) VALUES (NULL, '".$_SESSION['office_name']."', '".$_SESSION['lname']."', '".$_SESSION['fname']."', '".$_SESSION['law_school']."', '".$_SESSION['year_graduated']."', '".$_SESSION['office_address']."', '".$_SESSION['school_address']."', '".$_SESSION['email']."', '".$hashed_pass."', '".$_SESSION['gender']."', '".$_SESSION['office_contact']."', '".$_SESSION['contact_no']."', 'img/".$_SESSION['img']."');";
           
              
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