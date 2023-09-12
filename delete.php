<?php
include('./connection.php');
$user_id=$_GET['user_id'];

$sql="DELETE FROM details WHERE user_id='$user_id'";
$res=mysqli_query($connection,$sql);

if($res)
{
  header('Location:home.php');
}
else
{
  echo "invalied";
}

?>