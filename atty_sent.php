<?php

include("connect.php");
include("session.php");
if(isset($_POST['send'])){
$id=$_GET['id'];
$msg=$_POST['msg'];
$date = date("m-d-y");
$hey=$_SESSION['logged_id'];

$sql = "INSERT INTO `message` (`sender`, `receiver`, `message`, `id`) VALUES ('".$hey."', '".$id."', '".$msg."', NULL);";

  
if ($conn->query($sql) == TRUE) {
  

              } 
              header("Location: atty_chatbox.php?sender=$id");
            }

?>