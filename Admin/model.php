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
      <li><a href="profit.php">Total Profit</a></li>
      <li><a class="active" href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
    </ul>
  <ul class = "vertical">
    <li class = "vertical"><a href="addmodel.php">Add Model</a></li>
    <li class = "vertical"><a href="deletemodel.php">Delete Model</a></li>
    <li class = "vertical"><a href="updatemodel.php">Update Model</a></li>
    <li class = "vertical"><a href="displaymodel.php">Display Models</a></li>
  </ul>
</body>
