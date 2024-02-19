<?php include('session.php');  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pending Appointment</title>
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
    <div class="container-fluid">
  <?php include('nav.php');  ?>
  
  <div class="container text-center" >
      <div class="row">
        <header>
          <h1>Schedules</h1>
          <div style="margin-left:100px;" class="col-md-12">
            <div class="row">
              
   
          <?php


  include('connect.php');
  

    $sqlget = "SELECT * FROM appointment";
    $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

  while ($row = mysqli_fetch_assoc($sqldata)) {
   
   

  

                    echo "<div class='card m-2' style='width: 18rem'>
                    <div class='card-header' style='background-color:#FFEDDB;'><h3>
                    ".$row['law_office']."
                    </h3></div>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'<p>DATE : ".$row['date']."</p></li>
                      <li class='list-group-item'<p>TIME : ".$row['time']."</p></li>
                      <li class='list-group-item'> <a class='btn btn-danger' href=cancel.php?cancel=".$row['id'].">Cancel</a></li>
                    </ul>
                  </div>";

}

?>
</div>
</div>
        
      </div>
    </div>
    </header>
    </div>
    </div>
    
<?php include('footer.php');  ?>
</div>
</div>
</body>
</html>