<?php
include("./connection.php");
session_start();
if(isset($_POST['login']))
{
  $un=mysqli_real_escape_string($connection,$_POST['username']);
  $pw=mysqli_real_escape_string($connection,$_POST['password']);

  $sql="SELECT * FROM user WHERE username='$un' AND password='$pw'";
  $res=mysqli_query($connection,$sql);

  if(mysqli_num_rows($res)>0)
  {
    $_SESSION['user']=$un;
    header('Location:home.php');
  }
  else
  {
    echo "fail to login Try Again";
  }
}


//add user
if(isset($_POST['add']))
{
  $full_name=mysqli_real_escape_string($connection,$_POST['full_name']);
  $birthday=mysqli_real_escape_string($connection,$_POST['birthday']);
  $NIC=mysqli_real_escape_string($connection,$_POST['NIC']);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
  $qualification=mysqli_real_escape_string($connection,$_POST['qualification']);

  $sql="INSERT INTO details (full_name,birthday,NIC,address,qualification) 
  VALUES('$full_name','$birthday','$NIC','$address','$qualification') ";

  $res=mysqli_query($connection,$sql);

  if($res)
  {
    header('Location:home.php');
  }
  else
  {
    echo "invalid";
  }
}


//upadte
if(isset($_POST['update']))
{
  $user_id=mysqli_real_escape_string($connection,$_POST['user_id']);
  $full_name=mysqli_real_escape_string($connection,$_POST['full_name']);
  $birthday=mysqli_real_escape_string($connection,$_POST['birthday']);
  $NIC=mysqli_real_escape_string($connection,$_POST['NIC']);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
  $qualification=mysqli_real_escape_string($connection,$_POST['qualification']);

  $sql="UPDATE details
  SET full_name='$full_name',birthday='$birthday',NIC='$NIC',address='$address',qualification='$qualification'
  WHERE user_id='$user_id'" ;
  $res=mysqli_query($connection,$sql);
  if($res)
  {
    header('Location:home.php');
  }else
  {
    echo "invalid";
  }
}
?>