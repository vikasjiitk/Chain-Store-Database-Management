<!DOCTYPE html>
<title>Chain Store Management System</title>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
</style>
</head>
<?php
session_start();
echo $_SESSION['loggedin'];
if(!$_SESSION['loggedin'])
{
header("Location:login.php");
exit;
}
?>
<body>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </ul>
<p>Hello</p>
</body>
