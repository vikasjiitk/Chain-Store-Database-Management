<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>
<title>Total Profit</title>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
</style>
</head>
<body>
   <p>
   <h1>Chain Store Management System</h1>
   <h3></h3>
   </p>
    <ul>
    <li><a href="index.php">Store Stock</a></li>
    <li><a class="active" href="profit.php">Profit</a></li>
    <li><a href="recep.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
    <ul class = "vertical">
    <li class = "vertical"><a class = "active3" href="storeprofit.php">Store Profit</a></li>
    <li class = "vertical"><a href="dayprofit.php">Day Profit</a></li>
  </ul>
   <h3>Total Store Profit</h3>

</body>
