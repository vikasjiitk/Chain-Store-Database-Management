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
     <form action = "storeprofit.php" method = "post">
     <button type="submit">Store Profit</button>
   </form>
   <form action = "daystoreprofit.php" method = "post">
     <button type="submit">Day Wise Store Profit</button>
   </form>

   <h3>Total Day Profit</h3>
     <form action = "" method = "post">
     <input type = "text" name = "Date" placeholder="Date">
     <button type="submit">Submit</button>
     </form>
   
</body>