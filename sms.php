 <?php 
        if (isset($_POST['signup']) && $_POST['password'] == $_POST['repassword'] ) {
          

$number=$_POST['contact_no'];
$apicode='api';
$passwd='pword';
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