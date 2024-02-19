<?php include('session.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
</head>
<style type="text/css">
	td{
		width: 250px;
	}
</style>
<?php include('links.php'); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
	<div class="container-fluid">
<?php include('adminnav.php'); ?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8" align="center">
	<canvas id="myChart" style="max-width: 1000px;"></canvas>
  
</div>
</div>
</div>
</body>
 <?php
 include('connect.php');

$result = $conn->query("select * from client");
$GLOBAL['count']=$result->num_rows;

$result = $conn->query("select * from atty");
$GLOBAL['count1']=$result->num_rows;


   ?>
<script>
var xValues = ["Attorneys", "Client's"];
var yValues = [<?php echo $GLOBAL['count'];?>,<?php echo $GLOBAL['count1'];?>];
var barColors = ["#FFD6B6", "#EA7362"];

new Chart("myChart", {
           type: "bar",
           data: {
             labels: xValues,
             datasets: [{
               backgroundColor: barColors,
               data: yValues
             }]
           },
           options: {
           
             legend: {display: false},
               ticks: {
                             beginAtZero: true
                         },
             title: {
               display: true,
               text: "Number of User's"
             }
             
                           
           }
         });
</script>
</html>