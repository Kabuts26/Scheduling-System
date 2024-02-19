
<?php 
include('session2.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

   <!-- Bootstrap Icon CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
<style type="text/css">
	input{
		margin: 5px;
	}
</style>
<body>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="signup" style=" width: 450px;
    border-radius: 10px;
    background: #f2f7ff;
    border: none;
    height: 630px;
    margin-left: 100px;
    margin-top: 10%;
    font-family: Courier New;
    ">
          <table class="form" align="center">
            <tr>
              <th><h1 style="font-size: 30px; margin-top: 25%; font-weight: bolder;">SIGN UP</h1></th>
            </tr>
            <div>
            <form method="POST" class="pure-form">
              <tr><td>First Name</td><td><input type="text" name="fname" placeholder="First Name" required=""></td></tr>
              <tr><td>Last Name</td><td><input type="text" name="lname" placeholder="Last Name"required=""></td></tr>
              <tr><td>Middle Initial</td><td><input type="text" name="middle_int" placeholder="middle initial"required=""></td></tr>
              <tr><td>Gender</td><td><input type="radio" name="gender" value="Male">Male<br><input type="radio" name="gender" value="Female">Female</td></tr>
              <tr><td>Contact Number</td><td><input type="text" name="contact_no" maxlength="11" placeholder="Contact Number"required=""></td></tr>
              <tr><td>Age</td><td><input id="loaction" type="number" name="age" placeholder="Age"required=""></td></tr>
              <tr><td>Address</td><td><input id="loaction" type="text" name="address" placeholder="Address"required=""></td></tr>
              <tr><td>Email Address</td><td><input type="text" name="email" placeholder="Username"required="" ></td></tr>
              <tr><td>Password</td><td><input type="password" name="password" placeholder="Password"required="" id="password"></td></tr>
              <tr><td>Re-type Password</td><td><input type="password" name="repassword" placeholder="Password"required="" id="confirm_password"></td></tr>
              <tr><td colspan="2" align="right"><input type="submit" name="signup" value="Sign Up" class="mt-4 btn btn-primary pure-button pure-button-primary"></td></tr>
            </form>
          </table>
          </div>

        </div>
       
        </div>

        <?php 
        if (isset($_POST['signup']) && $_POST['password'] == $_POST['repassword'] ) {
          

$number=$_POST['contact_no'];
$apicode='ST-JOSHU112287_6DEQ9';
$passwd='#%4[]$x3{3';
$otp=mt_rand(100000,999999);

$message = 'Your OTP is '.$otp;

function itexmo($number,$message,$apicode,$passwd){
        $url = 'https://www.itexmo.com/php_api/api.php';
        $itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
        $param = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($itexmo),
            ),
        );
        $context  = stream_context_create($param);
        return file_get_contents($url, false, $context);
}

$result = itexmo($number,$message,$apicode, $passwd);
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.  
Please CONTACT US for help. ";  
}else if ($result == 0){
echo "Message Sent!";
$_SESSION['lname']=$_POST['lname'];
$_SESSION['fname']=$_POST['fname'];
$_SESSION['middle_int']=$_POST['middle_int'];
$_SESSION['contact_no']=$_POST['contact_no'];
$_SESSION['email']=$_POST['email'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['password']=$_POST['password'];
$_SESSION['age']=$_POST['age'];
$_SESSION['address']=$_POST['address'];

header("Location: otp.php?id='". $otp."'");

}
else{   
echo "Error Num ". $result . " was encountered!";
}
}


 ?>
 </div>

</div>
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>
</body>
</html>