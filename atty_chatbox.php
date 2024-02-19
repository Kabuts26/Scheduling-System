<?php include('session.php');  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Chat box</title>
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
  background-image: url("img/bkg1.jpg");

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

  
    <div class="container-fluid">
  <?php include('atty_nav.php');  ?>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
    <div class="modal-header" align="center">
    <div class="modal-body" style="height: 600px; overflow-y: scroll; overflow-x: hidden;">
    <?php
    include('connect.php');
    $sender =$_SESSION['logged_id'];
     $sqlget = "SELECT DISTINCT receiver FROM message where sender=$sender ORDER BY id DESC";
     $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
     while ($row = mysqli_fetch_assoc($sqldata)){
       $a= $row['receiver'];
        echo "<a href='atty_chatbox.php?sender=";
      echo $a."'>";

      $sqlget = "SELECT * FROM client where email='$a'";
     $sqldata1 = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
     while ($row1 = mysqli_fetch_assoc($sqldata1)){
        
      echo $row1['email']."</a> <br> <br>";

     }
          
       } 
     
    ?>
    
</div>

    </div>

    </div>
    <div class="col-md-5">
      <div class="modal-dialog">
        <div class="modal-content">
  
         <div class="modal-header" align="center"><?php 
         include("connect.php");
          $id=$_GET['sender'];

          $sqlget = "SELECT distinct sender FROM message where sender='$id'";
          $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
      
        while ($row = mysqli_fetch_assoc($sqldata)) {
        echo $row['sender']."<br>";
  
        
        }

         ?></div>
         <div class="modal-body" id="messageBody" style="height: 400px; overflow-y: scroll; overflow-x: hidden;">
        <?php include("connect.php"); 
        $atty_id=$_SESSION['logged_id'];
        $id2=$_GET['sender'];
        $sqlget = "SELECT * FROM message";
        $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
        echo "<div class='row'>";
        while ($row = mysqli_fetch_assoc($sqldata)) {
        if ($row['sender']==$id2 &&  $row['receiver']==$atty_id){
          echo "<div class='col-md-12'><p >".$row['message']."</p></div>";
  
        }
  
        if ($row['receiver']==$id &&  $row['sender']==$atty_id){
          echo "<div class='col-md-12'><p style='max-width:58%; border-radius:10px; padding:8px 10px;' class='text-white float-right bg-primary'>".$row['message']."</p></div>";
  
        }
        
        }
        echo '</div>';
        
        ?>
        </div>
          <div class="modal-footer">
          <form class="col-md-12" method="POST" action="atty_sent.php?id=<?php echo $_GET['sender'];?>">
            <textarea name="msg" class="form-control" style="height: 70p%; width: 100%;"></textarea>
       
        
        <input class="form-control" type="submit" name="send" value="Send">
        </form>
        <?php
        include("connect.php");
        if(isset($_POST['send'])){
        $id=$_GET['id'];
        $msg=$_POST['msg'];
        $date = date("m-d-y");

        $sql = "INSERT INTO `message` (`sender`, `receiver`, `message`, `id`) VALUES ('".$_SESSION['logged_id']."', '".$id."', '".$msg."', NULL);";
       
          
        if ($conn->query($sql) == TRUE) {
          
     
                      } 

                    }
        
        ?>
      </div>
        </div>
        </div>
      </div>
   </div>
   
<?php include('footer.php');  ?>
                  </div>
                  </div>
</body>
<script type="text/javascript">
  
  var messageBody = document.querySelector('#messageBody');
messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
</script>
</html>