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
      <li><a href="index.php">Admin</a></li>
      <li><a href="store.php">Store</a></li>
      <li><a href="owner.php">Owner</a></li>
      <li><a class="active" href="profit.php">Total Profit</a></li>
      <li><a href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
    <ul class = "vertical">
  <li class = "vertical"><a class="active3" href="storeprofit.php">Store Profit</a></li>
  <li class = "vertical"><a href="dayprofit.php">Day Profit</a></li>
  <li class = "vertical"><a href="daystoreprofit.php">Daywise Store Profit</a></li>
</ul>
   <h3>Total Store Profit</h3>
     <form action = "" method = "post">
     <input type = "text" name = "storeId" placeholder="Store Id">
     <button type="submit">Submit</button>
     </form>

</body>
