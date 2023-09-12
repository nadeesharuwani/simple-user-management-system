<?php
include("./navbar.php");

?>
<head>
<link rel="stylesheet" href="CSS/add.css">
</head>
<div class="formdiv"> 
<form action="script.php" method="post">
<?php
$user_id=$_GET['user_id'];
$sql="SELECT * FROM details WHERE user_id='$user_id'";
$res=mysqli_query($connection,$sql);

if(mysqli_num_rows($res)>0)
{
 $row=mysqli_fetch_assoc($res);
?>
<label>User Id:</label>
  <input type="text" name="user_id"  readonly value="<?php echo $row['user_id'];?>">
  <label>Full Name:</label>
  <input type="text" name="full_name"  value="<?php echo $row['full_name'];?>">
  <label>Birthday:</label>
  <input type="text" name="birthday"  value="<?php echo $row['birthday'];?>">
  <label>NIC:</label>
  <input type="text" name="NIC"  value="<?php echo $row['NIC'];?>">
  <label>Address:</label>
  <input type="text" name="address"  value="<?php echo $row['address'];?>">
  <label>Qualification:</label>
  <input type="text" name="qualification"  value="<?php echo $row['qualification'];?>">
  <button type="submit" name="update" class="addbutton">Update</button>
  <a href="home.php" class="addA" >Back</a>
<?php
}

?>
</form>
</div>
<?php
include("./footer.php");
?>