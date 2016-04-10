<!DOCTYPE html>
<?php session_start();?>
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
      <li><a href="index.php">Admin</a></li>
      <li><a href="store.php">Store Details</a></li>
      <li><a href="profit.php">Total Profit</a></li>
      <li><a class="active" href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
  <ul class = "vertical">
    <li class = "vertical"><a href="storeprofit.php">Store Profit</a></li>
    <li class = "vertical"><a href="dayprofit.php">Day Profit</a></li>
    <li class = "vertical"><a href="daystoreprofit.php">Daywise Store Profit</a></li>
  </ul>
</body>
