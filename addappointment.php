<?php
 include('session.php');
  include('connect.php');

  $id = $_POST["id"];
   

       $sqlget = "SELECT * FROM atty where atty_id='$id'";
        $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

        while ($row = mysqli_fetch_assoc($sqldata)) {
         $name= $row['office_name'];

        }

  
    if (isset($_POST['appoint'])) {
  $user_id = $_SESSION['logged_in'];
  $time = $_POST["time"];
$date = $_POST["date"];



$check_email = mysqli_query($conn, "SELECT* FROM appointment where date = '$date' and time='$time' and law_office_id='$id' ");
if(mysqli_num_rows($check_email) > 0){
  $_SESSION['alert']="<p class='text-danger'>Date and Time Already Taken</p>";
  header("Location: appointment.php?id=$id");
}
else{
  $sqlget = "SELECT * FROM client where email= '$user_id'";
  $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

  while ($row = mysqli_fetch_assoc($sqldata)) {
    $fname=$row['fname'];
    $lname=$row['lname'];
    


    $sqlinsert = "INSERT INTO `appointment` (`id`, `fname`, `lname`, `date`, `time`, `law_office_id`,`law_office`,`status`) VALUES (NULL, '".$fname."', '".$lname."', '".$_POST['date']."', '".$_POST['time']."', '".$id."', '".$name."','pending');";
   

    if (!mysqli_query($conn,$sqlinsert)){

              echo mysqli_error($sqlinsert);

              

        
          }
    
    }
    $_SESSION['alert']="<p class='text-success'>Set Appointment Successful</p>";
    header("Location: appointment.php?id=$id");

}


 
      
    }
    ?>