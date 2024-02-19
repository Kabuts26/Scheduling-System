<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Attorney Log In</title>
<meta charset="utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color: #f2f7ff;">
 
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-4"></div>
    <div class="col-xs-12 col-md-4  bg-white form h-75" style="margin-top: 10%;" align="center">
      <header class="h-25 mt-5 ml-5"><img src="img/logo1.png" width="250" height="250" align="center"></header> 
      <h1>Log in as Attorney</h1>
      <form  method="GET" >
        <div class="input-group mt-5" style="margin-left: 75px;">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class=" form-control w-75" name="user2" placeholder="Username">
    </div>
        <div class="input-group mt-5 mb-5" style="margin-left: 75px;">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control w-75" name="pass2" placeholder="Password" >
      <a href="" class="mt-2"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
    </div>
    <a href="login1.php" style="float: right;" class="mr-5">Log in as Client</a><br>
    <div class="float-right mr-5">
       
        <input type="submit" name="L" value="Log in " class="btn bg-primary mt-5">
          <input type="submit" name="Reg" value="Sign up" class="btn btn1 mt-5 "></input>

        </input><br><br>

        </div>
      </form>
      
    </div>
  </div>
  
</div>
<?php  
if (isset($_GET['L'])) {
      # code...
      
    include('connect.php');  
    $username = $_GET['user2'];  
    $password = $_GET['pass2'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        
       
          $sqlget = "SELECT * FROM atty where email = '$username'";
          $sqldata1 = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

          while ($row1 = mysqli_fetch_assoc($sqldata1)) {

            if(password_verify($password,$row1['pass']) && $username=="admin" ){

                $_SESSION['admin']=$username;
                header("Location: admin/admindash.php?id='". $username."'");
            }

            else if (password_verify($password,$row1['pass'])) {
                print "Logged in";
                $_SESSION['logged_in']=$username;
                $_SESSION['logged_id']=$row1['atty_id'];
                $id=$_SESSION['logged_id'];
                header("Location: atty_dashboard.php?id=$id");
            }
              else {
                  print "Password Incorrect";
              }
          }
          
        
        }  
     
   elseif (isset($_GET['Reg'])) {
         header("Location: signup_atty.php");
          exit(); 
      }  
    
?>  
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
});
</script>
<script>
        $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
    </script>
    <script type="text/javascript">
$('.sidebar1 a').click(function(){
    $('.sidebar1 .active').removeClass('active');
    $(this).parent().addClass('active');
});
</script>
</html>