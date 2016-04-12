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
     <input type = "password" name = "recPass" placeholder="Receptionist Password">
     <input type = "text" name = "recName" placeholder="Receptionist Name">
     <!-- <input type = "text" name = "storeId" placeholder="Store ID"> -->
     <button type="submit">ADD</button>
     </form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $recId = $_POST['recId'];
  $recUser = $_POST['recUser'];
  $recPass = $_POST['recPass'];
  $recName = $_POST['recName'];
  // $storeId = $_POST['storeId'];
  $query1 = "SELECT * from `Rcpts` where `recId` = '$recId' OR `recUser` = '$recUser'";
  $query_run1 = mysqli_query($link, $query1);
  $num = mysqli_num_rows($query_run1);
  if($num == 0){
    $query4 = "SELECT `storeId` from `Owners` where `ownerUsername` = '$user'";
    $query_run4 = mysqli_query($link, $query4);
    $store = mysqli_fetch_assoc($query_run4);
    $storeId = $store['storeId'];
    // $query3 = "SELECT * from `Stores` where `storeId` = '$storeId'";
    // $query_run3 = mysqli_query($link, $query3);
    // $num2 = mysqli_num_rows($query_run3);
    if(1){
      $query2 = "Insert into `Rcpts` values(".$recId.",'$recUser','$recPass','$recName',".$storeId.")";
      if($query_run2 = mysqli_query($link, $query2)){
        echo '<p>Receptionist Added Succesfully</p>';
      }
      else{
        echo '<p class="warning"> Failure</p>';
      }
    }
    else {echo '<p class="warning">Store id '.$storeId.' does not exist.</p>';}
  }
  else{ echo '<p class="warning">Receptionist '.$recId.' OR '.$recUser.' already exists</p>';}
}
