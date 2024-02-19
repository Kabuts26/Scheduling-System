<?php include('session.php');  ?>
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
      <div class="row" >
        <div class="col-md-2"></div>
     
        <div style="background-color: #FFEDDB; border: 2px #E3B7A0; color: black; " class="col-md-12 col-sm-12  text-black"> 
        <div class="row">    
        <?php
	include('connect.php');
	$user_id = $_SESSION['logged_id'];


		$sqlget = "SELECT * FROM appointment where law_office_id= '$user_id' and status='pending'";
		$sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());

		
		global $total;
		global $quantity;	
		global $price;
		global $id;		
			
			
	echo "<table class='table table-bordered'>";
	echo "<tr>  <th> Name </th>
				<th> Date </th>
				<th> Time </th>
				<th> Action </th>
				<th> Action </th>
				</tr>";


	while ($row = mysqli_fetch_assoc($sqldata))	{
		$name =$row['id'];

	
		
		echo "<TR>";
		
		echo "<TD>";
		echo $row['fname']." ".$row['lname'];
		echo "</td>";
		
		echo "<TD>";
		echo $row['date'];
		echo "</td>";

        echo "<TD>";
		echo $row['time'];
		echo "</td>";

		
?>

		<td>
			<a class="btn btn-outline-danger" href="atty_cancel.php?id=<?php echo $name; ?>" onclick="return confirm('Are you sure you want to cancel?')"> Cancel </a>
		</td>
		<td>
			<a type="button" href="accomodate.php?id=<?php echo $name; ?>"  class="btn btn-outline-success" >
  Accomodate
    </a>
		</td>
	</tr>


          <div class='modal' id='<?php echo $name; ?>'>
    <div class='modal-dialog'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header'>
          <h4 class='modal-title'><?php echo $row['cart_Name']; ?></h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>
          <img src='<?php echo $row['cart_Img']; ?>' width='80%' height='300px' class='ml-5 thumbnail border mt-2'>
          <p>SIZE: <?php echo $row['cart_size']; ?></p>
          <p>QUANTITY: <?php echo $row['cart_Quantity']; ?></p>
          <p>PRICE: <?php echo $row['cart_Price']; ?></p>
          
        </div>
        
        <!-- Modal footer -->
        <div class='modal-footer'>
       
       
        
      </div>
    </div>
  </div>
<?php
	}


	echo "</table>";

?>
  <?php include('footer.php');  ?>
	

    </div>
    </div>

    

   

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