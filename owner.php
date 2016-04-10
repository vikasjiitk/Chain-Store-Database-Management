<!DOCTYPE html>
<title>Chain Store Management System</title>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
</style>
</head>
<?php
session_start();
// echo $_SESSION['loggedin'];
if(!$_SESSION['loggedin'])
{
header("Location:login.php");
exit;
}
?>
<body>
  <p> Hello <?php echo $_SESSION['loggedin']; ?>!</p>
  <ul>
    <li><a class="active" href="stock.php">Store Stock</a></li>
    <li><a href="profit.php">Profit</a></li>
    <li><a href="recp.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </ul>
  <ul class = "vertical">
  <li class = "vertical"><a class="active" href="#home">Home</a></li>
  <li class = "vertical"><a href="#news">News</a></li>
  <li class = "vertical"><a href="#contact">Contact</a></li>
  <li class = "vertical"><a href="#about">About</a></li>
</ul>
</body>
