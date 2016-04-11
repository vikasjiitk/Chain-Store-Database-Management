<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
?>
<title>Receptionist Details</title>
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
    <li class = "vertical"><a class = "active3" href="recepdetails.php">Receptionist Details</a></li>
    <li class = "vertical"><a href="displayreceps.php">Display Receptionists</a></li>
  </ul>
  <h3>Details of a Receptionist</h3>
   <form action = "" method = "post">
     <input type = "text" name = "recId" placeholder="Receptionist ID">
     <button type="submit">Submit</button>
   </form>
   <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
     $link = mysqli_connect('localhost','pma','','chainStores');
     $user = $_SESSION['loggedin'];
     $owner = $_POST["ownerId"];
     $query = "SELECT * from `Owners` where `ownerId` = '$owner'";
     $query_run = mysqli_query($link, $query);
     $data = mysqli_fetch_assoc($query_run);
     echo '<p><hr> Owner Details - '.$data['ownerName'].', '.$data['storeId'].', '.$data['ownerUsername'].'</p>';
   }
  ?>
</body>