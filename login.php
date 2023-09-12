<?php
include("./navbar.php");
?>
<head>
  <link rel="stylesheet" href="CSS/login.css">
</head>
<div class="divlogin">
<form action="script.php" method="post">
  <label>User Name:</label>
  <input type="text" name="username" placeholder="Enter User Name...."><br>
  <label>Password:</label>
  <input type="password" name="password" placeholder="Enter Password...."><br>
  <button type="submit" name="login">Login</button>
</form>
</div>



<?php
include("./footer.php");
?>