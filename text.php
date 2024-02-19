<!DOCTYPE html>
<html lang="en">
<hr>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/adminstyles.css">
        <title>Admin Page</title>
        
    </head>
<body>

<form action="" method="post">
    <input type="submit" name="text">
</form>
<?php
    if(isset($_POST['text'])){
    $number='09070312015';
    $apicode='TR-JAYVE312015_BKKT5';
    $passwd='l)7tk51u9q';
    $otp=mt_rand(100000,999999);
    
    $message = 'hi';
    
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
            echo "aa";
        }
        }
        $result = itexmo($number,$message,$apicode, $passwd);
        if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.  
Please CONTACT US for help. ";  
}else if ($result == 0){
echo "Message Sent!";
}
else{   
echo "Error Num ". $result . " was encountered!";
}

?>
</body>
</html>