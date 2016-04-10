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
      <li><a href="admin.php">Admin</a></li>
      <li><a href="store.php">Store Details</a></li>
      <li><a class="active" href="profit.php">Total Profit</a></li>
      <li style="float:right"><a class="active1" href="logout.php">Logout</a></li>
    </ul>
   <form action = "totalprofit.php" method = "post">
     <button type="submit">Total Profit</button>
   </form>
   <form action = "storeprofit.php" method = "post">
     <button type="submit">Store Profit</button>
   </form>
   <form action = "dayprofit.php" method = "post">
     <button type="submit">Day Wise Total Profit</button>
   </form>
   <form action = "daystoreprofit.php" method = "post">
     <button type="submit">Day Wise Store Profit</button>
   </form>
   
</body>