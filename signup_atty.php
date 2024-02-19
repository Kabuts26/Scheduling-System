
<?php 
include('session2.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up as Attorney</title>
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
    height: 750px;
    margin-left: 100px;
    margin-top: 10%;
    font-family: Courier New;
    ">
          <table class="form" align="center">
            <tr>
              <th colspan="2"><h1 style="font-size: 30px; margin-top:10%; font-weight: bolder;">SIGN UP as Attorney</h1></th>
            </tr>
            <div>
            <form method="POST" class="pure-form">
              <tr><td>Law office name</td><td><input type="text" name="office_name" placeholder="First Name" required=""></td></tr>
              <tr><td>Office Address</td><td><input type="text" name="office_address" placeholder="Law Office address"required=""></td></tr>
              <tr><td>First Name</td><td><input type="text" name="fname" placeholder="First Name"required=""></td></tr>
              <tr><td>Last Name</td><td><input type="text" name="lname" placeholder="Last Name"required=""></td></tr>
              <tr><td>Law School</td><td><input type="text" name="law_school" placeholder="Law school"required=""></td></tr>
              <tr><td>Law School Address</td><td><input type="text" name="school_address" placeholder="Law school address"required=""></td></tr>
              <tr><td>Year Graduated</td><td><input type="text" name="year_graduated" placeholder="Year graduated"required=""></td></tr>
              <tr><td>Gender</td><td><input type="radio" name="gender" value="Male">Male<br><input type="radio" name="gender" value="Female">Female</td></tr>
              <tr><td>Contact Number</td><td><input type="number" name="contact_no" maxlength="11" placeholder="Contact Number"required=""></td></tr>
              <tr><td>Office Contact Number</td><td><input type="number" name="office_contact" maxlength="11" placeholder="Office Contact Number"required=""></td></tr>
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
$_SESSION['office_name']=$_POST['office_name'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['fname']=$_POST['fname'];
$_SESSION['office_address']=$_POST['office_address'];
$_SESSION['law_school']=$_POST['law_school'];
$_SESSION['school_address']=$_POST['school_address'];
$_SESSION['year_graduated']=$_POST['year_graduated'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['contact_no']=$_POST['contact_no'];
$_SESSION['office_contact']=$_POST['office_contact'];
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];


header("Location: atty_otp.php?id='". $otp."'");

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