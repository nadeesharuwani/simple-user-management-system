<?php
include("./navbar.php");
?>
<head>
<link rel="stylesheet" href="CSS/home.css">
</head>

<h1 class="h1text">Admin Dash Board</h1>
<a href="add.php" class="addButton" >ADD New </a>
<div class="divTable">
<table class="homeTable">
  <tr>
    <th>User Id</th>
    <th>Full Name</th>
    <th>Birthday</th>
    <th>NIC</th>
    <th>Address</th>
    <th>Qualification</th>
    <th>Action</th>
  </tr>


<?php
$sql="SELECT * FROM details ";
$res=mysqli_query($connection,$sql);

if(mysqli_num_rows($res)>0)
{
  while($row=mysqli_fetch_assoc($res))
  {
    $user_id=$row['user_id'];
    echo "<tr>";
    echo "<td>".$row['user_id']."</td>";
    echo "<td>".$row['full_name']."</td>";
    echo "<td>".$row['birthday']."</td>";
    echo "<td>".$row['NIC']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['qualification']."</td>";
    echo "<td> ";
    echo "<a name='update' class='upbtton' href='./update.php?user_id=$user_id' >Update</a>";
    echo "<a name='delete' class='deletebtton' href='delete.php?user_id=$user_id'>Delete</a>";
    echo "</td>";
  }
}

?>
</table>
</div>

<?php
include("./footer.php");
?>