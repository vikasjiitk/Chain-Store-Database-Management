<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>
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
      <li><a class="active" href="store.php">Store</a></li>
      <li><a href="owner.php">Owner</a></li>
      <li><a href="profit.php">Total Profit</a></li>
      <li><a href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
   </ul>
   <ul class = "vertical">
    <li class = "vertical"><a class = "active3" href="addstore.php">Add Store</a></li>
    <li class = "vertical"><a href="deletestore.php">Delete Store</a></li>
    <li class = "vertical"><a href="storedetails.php">Store Details</a></li>
  </ul>
   <h3>Add a Store</h3>
     <form action = "" method = "post">
     <input type = "text" name = "storeId" placeholder="Store ID">
     <input type = "text" name = "location" placeholder="Location">
     <input type = "text" name = "contactNo" placeholder="Contact Number">
     <button type="submit">ADD</button>
     </form>
</body>
