<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>
<title>Display Receptionists</title>
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
    <li><a href="profit.php">Profit</a></li>
    <li><a class="active" href="recep.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
   <ul class = "vertical">
    <li class = "vertical"><a href="addrecep.php">Add Receptionist</a></li>
    <li class = "vertical"><a href="deleterecep.php">Delete Receptionist</a></li>
    <li class = "vertical"><a href="recepdetails.php">Receptionist Details</a></li>
    <li class = "vertical"><a class="active3" href="displayreceps.php">Display Receptionists</a></li>
  </ul>
  <h3>Display Receptionists</h3>

</body>
