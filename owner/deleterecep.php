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
  $q = "SELECT * from `Owners` where `ownerUsername` = '$user' and `OwnerPass` = '$pass'";
  $link = mysqli_connect('localhost','pma','','chainStores');
  $run = mysqli_query($link, $q);
  $n = mysqli_num_rows($run);
  if($n == 0){
    header("Location:../login.php");
    exit;
  }
}
?>
<title>Delete Receptionist</title>
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
    <li><a href="index.php">Owner</a></li>
    <li><a href="modelsearch.php">Store Stock</a></li>
    <li><a href="profit.php">Profit</a></li>
    <li><a class="active" href="recep.php">Receptionists</a></li>
    <li style="float:right"><a class="active" href="../logout.php">Logout</a></li>
  </ul>
   <ul class = "vertical">
    <li class = "vertical"><a href="addrecep.php">Add Receptionist</a></li>
    <li class = "vertical"><a class="active3" href="deleterecep.php">Delete Receptionist</a></li>
    <li class = "vertical"><a href="recepdetails.php">Receptionist Details</a></li>
    <li class = "vertical"><a href="displayreceps.php">Display Receptionists</a></li>
  </ul>
  <h3>Delete a Receptionist</h3>
     <form action = "" method = "post">
     <input type = "text" name = "recId" placeholder="Receptionist ID">
     <button type="submit">DELETE</button>
     </form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $link = mysqli_connect('localhost','pma','','chainStores');
  $user = $_SESSION['loggedin'];
  $recId = $_POST["recId"];
  $query1 = "SELECT * from `Rcpts` where `recId` = '$recId'";
  $query_run1 = mysqli_query($link, $query1);
  $num = mysqli_num_rows($query_run1);
  if($num != 0){
    $query2 = "DELETE from `Rcpts` where `recId` = '$recId'";
    if($query_run2 = mysqli_query($link, $query2)){
      echo '<p>Receptionist Deleted Succesfully</p>';
    }
    else{
      echo '<p class="warning"> Failure</p>';
    }
  }
  else{ echo '<p class="warning">Receptionist '.$recId.' does not exists</p>';}
}
?>
