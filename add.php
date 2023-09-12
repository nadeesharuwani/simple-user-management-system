<?php
include("./navbar.php");
?>
<head>
<link rel="stylesheet" href="CSS/add.css">
</head>
<div class="formdiv"> 
<form action="script.php" method="post">
  <label>Full Name:</label>
  <input type="text" name="full_name" id="">
  <label>Birthday:</label>
  <input type="text" name="birthday" id="">
  <label>NIC:</label>
  <input type="text" name="NIC" id="">
  <label>Address:</label>
  <input type="text" name="address" id="">
  <label>Qualification:</label>
  <input type="text" name="qualification" id="">
  <button type="submit" name="add" class="addbutton">Add</button>
  <a href="home.php" class="addA" >Back</a>
</form>
</div>
<?php
include("./footer.php");
?>