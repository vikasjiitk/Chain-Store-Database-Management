<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['loggedin'])
{
header("Location:../login.php");
exit;
}
else{
  $user = $_SESSION['loggedin'];
  $pass = $_SESSION['pass'];
  $q = "SELECT * from `Admins` where `adminUser` = '$user' and `adminPass` = '$pass'";
  $link = mysqli_connect('localhost','pma','','chainStores');
  $run = mysqli_query($link, $q);
  $n = mysqli_num_rows($run);
  if($n == 0){
    header("Location:../login.php");
    exit;
  }
}
?>
<title>Add Owner</title>
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
      <li><a class="active" href="owner.php">Owner</a></li>
      <li><a href="profit.php">Profit</a></li>
      <li><a href="model.php">Model</a></li>
      <li style="float:right"><a class="active1" href="../logout.php">Logout</a></li>
   </ul>
   <ul class = "vertical">
    <li class = "vertical"><a class = "active3" href="addowner.php">Add Owner</a></li>
    <li class = "vertical"><a href="deleteowner.php">Delete Owner</a></li>
    <li class = "vertical"><a href="ownerdetails.php">Owner Details</a></li>
    <li class = "vertical"><a href="displayowners.php">Display Owners</a></li>
  </ul>
   <h3>Add a Owner</h3>
     <form action = "" method = "post">
     <input type = "number" name = "ownerId" placeholder="Owner ID">
     <input type = "text" name = "ownerName" placeholder="Owner Name">
     <input type = "number" name = "storeId" placeholder="Store ID">
     <input type = "text" name = "ownerUsername" placeholder="Owner Username">
     <input type = "password" name = "ownerPass" placeholder="Owner Password">
     <button type="submit">ADD</button>
     </form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $ownerId = $_POST["ownerId"];
  $ownerName = $_POST["ownerName"];
  $storeId = $_POST["storeId"];
  $ownerUsername = $_POST['ownerUsername'];
  $ownerPass = $_POST['ownerPass'];
  $hashownerPass = md5($ownerPass);
  $query1 = "SELECT * from `Owners` where `ownerId` = '$ownerId' OR `ownerUsername` = '$ownerUsername'";
  $query_run1 = mysqli_query($link, $query1);
  $num = mysqli_num_rows($query_run1);
  if($num == 0){
    $query3 = "SELECT * from `Stores` where `storeId` = '$storeId'";
    $query_run3 = mysqli_query($link, $query3);
    $num2 = mysqli_num_rows($query_run3);
    if($num2 != 0){
      $query2 = "Insert into `Owners` values(".$ownerId.",'$ownerName',".$storeId.",'$ownerUsername','$hashownerPass')";
      if($query_run2 = mysqli_query($link, $query2)){
        echo '<p>Owner Added Succesfully</p>';
      }
      else{
        echo '<p class="warning"> Failure</p>';
      }
    }
    else {echo '<p class="warning">Store id '.$storeId.' does not exist.</p>';}
  }
  else{ echo '<p class="warning">Owner '.$ownerId.' OR '.$ownerUsername.' already exists</p>';}
}
 ?>
