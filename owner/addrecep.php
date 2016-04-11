<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>
<title>Add Receptionist</title>
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
    <li class = "vertical"><a class="active3" href="addrecep.php">Add Receptionist</a></li>
    <li class = "vertical"><a href="deleterecep.php">Delete Receptionist</a></li>
    <li class = "vertical"><a href="recepdetails.php">Receptionist Details</a></li>
    <li class = "vertical"><a href="displayreceps.php">Display Receptionists</a></li>
  </ul>
   <h3>Add a Receptionist</h3>
     <form action = "" method = "post">
     <input type = "text" name = "recId" placeholder="Receptionist ID">
     <input type = "text" name = "recUser" placeholder="Receptionist UserName">
     <input type = "text" name = "recPass" placeholder="Receptionist Password">
     <input type = "text" name = "recName" placeholder="Receptionist Name">
     <input type = "text" name = "storeId" placeholder="Store ID">
     <button type="submit">ADD</button>
     </form>
</body>
