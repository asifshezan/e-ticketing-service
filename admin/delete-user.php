<?php
  require_once('functions/function.php');
  $id=$_GET['d'];
  $del="DELETE FROM ad_user WHERE user_id='$id'";
  if(mysqli_query($con,$del)){
    header('Location:all-user.php');
  }else {
    echo "Opps!! Delete Failed";
  }
 ?>
