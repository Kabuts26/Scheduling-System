<?php include('session.php');  
$_SESSION['alert']=''
?>
<!DOCTYPE html>
<html>
<head>
  <title>Attorney's</title>
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
      <div class="row" style="overflow-y: scroll; height:700px;">
          <?php


  include('connect.php');
  

    $sqlget = "SELECT * FROM atty";
    $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

  while ($row = mysqli_fetch_assoc($sqldata)) {
    $name = "name".$row['atty_id'];
      echo "<div class='card m-4' style='width:16rem; height:500px; background-color:#FFEDDB;'>
      <img class='card-img-top' src='".$row['img']."' alt='Card image cap' onerror=this.src='img/profile.png'>
      <div class='card-body'>
        <h5 class='card-title'>".$row['office_name']."</h5>
        <p class='card-text'>Atty. ".$row['fname']." ".$row['lname']."</p>
        <a style='background-color:#E3B7A0;' data-toggle='modal' data-target='#".$name."' type='submit' class='float-center mt-auto mb-2 btn  align-bottom text-white'>View Atty. Profile <i class='bi bi-eye'></i></a>
      </div>
    </div>"
?>

 <div class='modal' id='<?php echo $name; ?>'>
    <div class='modal-dialog modal-lg'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header'>
          <h1 class='modal-title'><?php echo "Atty. ".$row['fname']; echo " ";?></h1>
          <h1 class='modal-title ml-3'><?php echo $row['lname']; ?></h1>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body' align="center" >
        <img onerror=this.src='img/profile.png' src='<?php echo $row['img']; ?>' width='20%' >
          <p><strong>Office Name: </strong> <?php echo $row['office_name']; ?></p>
          <p><strong>Law School: </strong> <?php echo $row['law_school']; ?></p>
          <p><strong>Year Graduated: </strong> <?php echo $row['year_graduated']; ?></p>
          <p><strong>Law School Address: </strong> <?php echo $row['school_address']; ?></p>
          <p><strong>Email: </strong> <?php echo $row['email']; ?></p>
          <p><strong>Contact Number: </strong> <?php echo $row['contact_no']; ?></p>
          <p><strong>Office Contact Number: </strong> <?php echo $row['office_contact']; ?></p>
        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
         <a class="btn btn-primary" href="chatbox.php?id=<?php echo $row['atty_id']; ?>">Chat</a>
         <a class="btn btn-success" href="appointment.php?id=<?php echo $row['atty_id']; ?>">Set Appointment</a>
      </div>
    </div>
  </div>
</div>

  <?php
  }
?>        
    </div>
    </header>
    </div>
    </div>
     <?php include('footer.php');  ?>

</div>
</div>
</body>
<script type="text/javascript">
$('.sidebar1 a').click(function(){
    $('.sidebar1 .active').removeClass('active');
    $(this).parent().addClass('active');
});
</script>
</html>