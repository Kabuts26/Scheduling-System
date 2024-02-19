<?php include('session.php');  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Attorney's Profile</title>
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
      <?php include('atty_nav.php');  ?>
  
      <div class="container text-center" >
        <div class="row">
          <?php
 include('connect.php');

$result = $conn->query("select * from appointment");
$GLOBAL['count']=$result->num_rows;
   ?>
        <h1>TOTAL APPOINTMENT SCHEDULE</h1>
        <h1><?php echo $GLOBAL['count']; ?></h1>
        
         
    </div>
    </header>
    </div>
    </div>
     <?php include('footer.php');  ?>
</body>
</html>