<?php include('session.php');  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
</head>
<?php include('links.php');  ?>
 <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Law Firm</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
 
<style type="text/css">
body, html {
  height: 100%;


  /* The image used */
  background-image: url("img/bkg2.jpg");

  /* Full height */

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}



</style>

<body>

  <header>
    <div class="container-fluid h-100">
      <?php include('nav.php');  ?>
  
      <div class="container text-center" >
      <div class="row" >
      <div class="col-md-2"></div>
     
     <div style="background-color: #FFEDDB; border: 2px #E3B7A0; color: black; " class="col-md-12 col-sm-12  text-black"> 
     <div class="row">    
<br><br><br>
<?php 
include('connect.php');
$id=$_SESSION['logged_id'];

 $sqlget = "SELECT * FROM client where id='$id'";
 $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

while ($row = mysqli_fetch_assoc($sqldata))	{
     $_GLOBAL['img']=$row['img'];
 }
?>
<div class="col-md-5"><img style="width:60%;" onerror=this.src="img/profile.png" class="m-5" src="<?php echo $_GLOBAL['img']; ?>" ></div>
<div class='col-md-6 mt-5' align="center">
     <table class=" table table-borderless" > 
     <?php
include('connect.php');

$id=$_SESSION['logged_id'];

 $sqlget = "SELECT * FROM client where id='$id'";
 $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

while ($row = mysqli_fetch_assoc($sqldata))	{

 $lname = $row['lname'];
 $fname = $row['fname'];
 $address=$row['address'];
 $email=$row['email'];
 $pass=$row['password'];

 $contact_no=$row['contact_no'];
      }

?>
       <tr>
       <strong><td><strong>Full Name : </strong></td></strong>
         
         <td><?php
         echo $fname." ".$lname;
         ?> </td>

       </tr>
       <tr>
       <strong> <td><strong>Address : </strong> </td></strong>
        
         <td><?php
         echo $address;
         ?> </td>

       </tr>

       <tr>
         <strong><td><strong>Contact Number : </strong> </td></strong>
         
         <td><?php
         echo $contact_no;
         ?> </td>

       </tr>

     

       <tr>
       <td><strong>Email : </strong></td>
         
         <td><?php
         echo $email;
         ?> </td>

       </tr>
       <tr>
       <strong></strong>
        
<div class="row ">
 <div class="col-10">
  
<div class="form-group">


</div>
</form>
    </div>
  </div>
</div>
            
            
          </td>

          </tr>

          <tr>
            <td> </td>
            <td><button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#update" style="font-size: 16px;" class="ml-5">Edit Profile</button></td>

          </tr>
          

        </table>
         
          
        </div>
        <div class="col-md-5 col-sm-12  h-25">
         
        </div>
      </div>
  <?php include('footer.php');  ?>
	

    </div>
    </div>

    <form  method="post" enctype="multipart/form-data">


   <div class='modal' id="update">
    <div class='modal-dialog'>
      <div class='modal-content'>
     
        <!-- Modal Header -->
        <div class='modal-header'>
          <h4 class='modal-title'>Edit Profile</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
         
          <div class="form-group">
            <label class="float-left">Choose Profile Photo: </label>
            <input name="fileToUpload" id="fileToUpload" class="ml-2" type="file" >
          </div>
          <div class="form-group">
            <label class="float-left">Name  </label>
            <input type="text" class="form-control" placeholder="<?php echo $fname;  ?>" name="fname" required>
          </div>
          <div class="form-group">
            <label class="float-left">Last Name</label>
            <input type="text" class="form-control" placeholder="<?php echo $lname;  ?>" name="lname" required>
          </div>
         
          <div class="form-group">
            <label class="float-left">Contact Number</label>
            <input type="number" class="form-control" placeholder="<?php echo $contact_no;  ?>" name="office_name" required>
          </div>
          <div class="form-group">
            <label class="float-left">Address</label>
            <input type="text" class="form-control" placeholder="<?php echo $address;  ?>" name="address" required>
          </div>
          <div class="form-group">
            <label class="float-left">Email</label>
            <input type="email" class="form-control" placeholder="<?php echo $email;  ?>" name="email" required>
          </div>
          <div class="form-group">
            <label class="float-left">Password</label>
            <div class="input-group" id="show_hide_password1">
      <input class="form-control" type="password" name="pass" required>
            <a href="" class="mt-2"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
      
    </div>
    <div class="form-group">
            <label class="float-left">Confirm Password</label>
            <div class="input-group" id="show_hide_password2">
      <input class="form-control" type="password" name="pass" required>
            <a href="" class="mt-2"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
      
    </div>
 
        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer' align="center">
       
        
        <input type="submit" class="btn btn-info" name="update" value="Update">
       
      </div>
</form>

<?php

include('connect.php');


// Check if image file is a actual image or fake image
if(isset($_POST["update"])) {
  $password=$_POST['pass'];
  $pass = password_hash($password, PASSWORD_DEFAULT);
  
  $img1= "img/".$_FILES["fileToUpload"]["name"];
  $sqlget = "UPDATE `client` SET  `lname` = '".$_POST['lname']."', `fname` = '".$_POST['fname']."', `address` = '".$_POST['address']."', `email` = '".$_POST['email']."', `password` = '".$pass."',  `img` = '".$img1."' WHERE `client`.`email` = '".$_SESSION['logged_in']."';";
$sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data2'. mysqli_connect_error());
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

   

</body>

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
    $("#show_hide_password1 a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password1 input').attr("type") == "text"){
            $('#show_hide_password1 input').attr('type', 'password');
            $('#show_hide_password1 i').addClass( "fa-eye-slash" );
            $('#show_hide_password1 i').removeClass( "fa-eye" );
        }else if($('#show_hide_password1 input').attr("type") == "password"){
            $('#show_hide_password1 input').attr('type', 'text');
            $('#show_hide_password1 i').removeClass( "fa-eye-slash" );
            $('#show_hide_password1 i').addClass( "fa-eye" );
        }
    });
    $("#show_hide_password2 a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password2 input').attr("type") == "text"){
            $('#show_hide_password2 input').attr('type', 'password');
            $('#show_hide_password2 i').addClass( "fa-eye-slash" );
            $('#show_hide_password2 i').removeClass( "fa-eye" );
        }else if($('#show_hide_password2 input').attr("type") == "password"){
            $('#show_hide_password2 input').attr('type', 'text');
            $('#show_hide_password2 i').removeClass( "fa-eye-slash" );
            $('#show_hide_password2 i').addClass( "fa-eye" );
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