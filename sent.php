<?php
$a=$_GET['id'];
include("connect.php");
include("session.php");
if(isset($_POST['send'])){
$id=$_GET['id'];
$msg=$_POST['msg'];
$date = date("m-d-y");
$hey=$_SESSION['logged_in'];

$sql = "INSERT INTO `message` (`sender`, `receiver`, `message`, `id`) VALUES ('".$hey."', '".$a."', '".$msg."', NULL);";

  
if ($conn->query($sql) == TRUE) {
  

              } 
              header("Location: chatbox.php?id=$a");
            }

?>