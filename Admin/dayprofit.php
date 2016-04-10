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
      <li><a class="active" href="profit.php">Total Profit</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
    <ul class = "vertical">
  <li class = "vertical"><a href="storeprofit.php">Store Profit</a></li>
  <li class = "vertical"><a class="active3" href="dayprofit.php">Day Profit</a></li>
  <li class = "vertical"><a href="daystoreprofit.php">Daywise Store Profit</a></li>
</ul>
   <h3>Total Day Profit</h3>
     <form action = "" method = "post">
     <input type = "text" name = "Date" placeholder="Date">
     <button type="submit">Submit</button>
     </form>

</body>
