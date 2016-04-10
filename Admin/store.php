<!DOCTYPE html>
<?php session_start();?>
<title>Store Details</title>
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
   <form action = "" method = "post">
     <input type = "text" name = "storeId" placeholder="Store ID">
     <button type="submit">Submit</button>
   </form>

</body>
