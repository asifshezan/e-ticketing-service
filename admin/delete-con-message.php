<?php
  require_once('functions/function.php');
  $id=$_GET['d'];
  $del="DELETE FROM contact WHERE con_id='$id'";
  if(mysqli_query($con,$del)){
    header('Location:contact-message.php');
  }else {
    echo "Opps!! Delete Failed";
  }
 ?>
