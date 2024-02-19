
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
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
    height: 450px;
    margin-left: 100px;
    margin-top: 30%;
    font-family: Courier New;
    ">
          <table class="form" align="center">
            <tr>
              <th><h1 style="font-size: 30px; margin-top: 25%; font-weight: bolder;">SIGN UP</h1></th>
            </tr>
            <div>
            <form method="POST">
              <tr><td>First Name</td><td><input type="text" name="fname" placeholder="First Name" required=""></td></tr>
              <tr><td>Last Name</td><td><input type="text" name="lname" placeholder="Last Name"required=""></td></tr>
              <tr><td>Middle Initial</td><td><input type="text" name="middle_init" placeholder="Last Name"required=""></td></tr>
              <tr><td>Contact Number</td><td><input type="text" name="contact_no" maxlength="11" placeholder="Contact Number"required=""></td></tr>
              <tr><td>Address</td><td><input id="loaction" type="text" name="address" placeholder="Address"required=""></td></tr>
              <tr><td>Username</td><td><input type="text" name="username" placeholder="Username"required=""></td></tr>
              <tr><td>Password</td><td><input type="text" name="password" placeholder="Password"required=""></td></tr>
              <tr><td colspan="2" align="right"><input type="submit" name="signup" value="Sign Up" class="btn btn-primary"></td></tr>
            </form>
          </table>
          </div>

        </div>
        </div>

        <?php 
        if (isset($_POST['signup'])) {
          

 $sqlinsert = "INSERT INTO `user` (`id`, `fname`, `middle_init`, `lname`, `gender`, `contact_no`, `email`, `street`, `brgy`, `municipality`, `province`, `user`, `pass`) VALUES (NULL,'".$_POST['fname']."', '".$_POST['middle_init']."', '".$_POST['lname']."', '".$_POST['gender']."', '".$_POST['contact_no']."', '".$_POST['email']."', '".$_POST['street']."', '".$_POST['brgy']."', '".$_POST['municipality']."', '".$_POST['province']."', '".$_POST['user']."', '".$_POST['pass']."')";

            if (mysqli_query($conn,$sqlinsert)){

                echo "<h1 class='text-success'>Sign up Successful</h1>";
                 

            } else {

              die("Username Already exist". mysqli_connect_error());
            }

 ?>
 </div>

</div>
</body>
</html>