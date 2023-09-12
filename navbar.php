<?php
include("./connection.php");
session_start();
?>
<head>
  <title>User Management System</title>
  <link rel="stylesheet" href="CSS/navbar.css">
</head>
<body>
  <?php
  if (isset($_SESSION['user']))
  {?>
    <div class="navdiv">
    <h1 class="navh1">User Management System</h1>
    <nav>
    <ul class="navlist"><li><a href="logout.php" class="navA">Logout</a></li></ul>
    </nav>
    </div>
  </body>
  <?php
  }else{
  ?>
<div class="navdiv">
  <h1 class="navh1">User Management System</h1>
  <nav>
    <ul class="navlist"><li><a href="login.php" class="navA">Login</a></li></ul>
</nav>
</div>
</body>
<?php
}
?>