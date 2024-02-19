
<?php include('session.php');  ?>
<?php
include('connect.php');
include 'Calendar.php';
$_SESSION['id']=$_GET['id'];
$id = $_SESSION['id'];
date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:sa");

$calendar = new Calendar($date );
$sqlget = "SELECT * FROM appointment where law_office_id=$id";
$sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
while ($row = mysqli_fetch_assoc($sqldata))	{
  $date =$row['date'];
  $time =$row['time'];
  $calendar->add_event($time,$date, 1, 'green');
}
?>

<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Appointment</title>
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
    <link href="style.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
 
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
              <div class="row">
                <div class="col-md-7" > <?php echo $calendar; ?></div>
              <div class="card col-md-5">
  <div class="card-header" style="background-color: #FFEDDB;">
  <?php include('connect.php');
                global $id;
                $_SESSION['id']=$_GET['id'];
                $id = $_SESSION['id'];
                global $name;

                  if (isset($_GET['id'])) {

                     $sqlget = "SELECT * FROM atty where atty_id='$id'";
                      $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

                      while ($row = mysqli_fetch_assoc($sqldata)) {
                       $name= $row['office_name'];



                                 }
                              }
                        
                        echo "<h1>Set Appointment to ".$name."</h1>";

                  ?>
  </div>
  <div class="card-body">
   
   
    <div class="row">
    <div class=col-md-2></div>
  <div align="left">
           
              <form action="addappointment.php" method="post" class="mt-5">
                <table class="table table-borderless">
                  <tr>
                    <td><label><strong>Select Date:</strong></label></td>
                    <td><input class="date" type="date" name="date" required>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                  </tr>
                    <tr><td><label><strong>Select Time:</strong></label</td>
                  <td><select name="time">
                      <option>08:00 AM</option>
                      <option>09:00 AM</option>
                      <option>10:00 AM</option>
                      <option>11:00 AM</option>
                      <option>01:00 PM</option>
                      <option>02:00 PM</option>
                      <option>03:00 PM</option>
                      <option>04:00 PM</option>
                      <option>05:00 PM</option>

                    </select></td></tr>
                   
                    <tr>
                      <td></td>
                      <td><input  type="submit" name="appoint" value="Set Appointment"  class="ml-5 btn btn-success float-right"></td>

                    </tr>
                    
                            </table>

                    
              </form>
              <p><?php 
              if(isset($_GET['id'])){
              echo $_SESSION['alert'];
              }
              else{
                echo "";
              }
              
              ?></p>

              </div>
    
  </div>
</div>
                
                
     </div>   
   
            </div>
   
        </div>
    </div>

  </header>
     <?php include('footer.php');  ?>
  </div>
  </div>

  
</body>
</html>